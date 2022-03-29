const dispatchElementChild = $$(".dispatch-element");

window.onload = () => {
    dispatchElementChild[0].style.transform = "translateX(0)";
    dispatchElementChild[1].style.transform = "translateX(0)";
};

if (
    window.location.pathname != pathnameItem ||
    window.location.pathname != pathnameFashion ||
    window.location.pathname != pathnameBeauty
) {
    hoverNavigationTabs(navigationTab1, headerMenuPlaceholder1);
    hoverNavigationTabs(navigationTab2, headerMenuPlaceholder2);

    headerMenuPlaceholder1.onmouseover = () => {
        navigationTab2MouseOver(navigationTab1, headerMenuPlaceholder1);
    };
    headerMenuPlaceholder1.onmouseout = () => {
        navigationTab2MouseOut(navigationTab1, headerMenuPlaceholder1);
    };

    headerMenuPlaceholder2.onmouseover = () => {
        navigationTab2MouseOver(navigationTab2, headerMenuPlaceholder2);
    };
    headerMenuPlaceholder2.onmouseout = () => {
        navigationTab2MouseOut(navigationTab2, headerMenuPlaceholder2);
    };
}
