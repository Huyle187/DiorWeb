const textInputs = $$(".text-input");
const footerNewsletterLabelFields = $$(
    ".footer-newsletter__input .form-group .label-field"
);

const checkbox = $$(".checkbox");
const uncheck = $$(".uncheck");
const checked = $$(".checked");

const customSelectFieldCivilityButton = $(
    "#custom-select-field-civility-button"
);
const customSelectHznOptions = $(".custom-select-hzn-options");
const selected = $(".selected");
const customSelectHznOption = $$(".custom-select-hzn-option");

const emailInput = $(".input > #email");
const lastNameInput = $(".input > #last-name");
const firstNameInput = $(".input > #first-name");
const confirmButton = $(".actions > #confirm");

const checkedConfirm = $("#checked-confirm");
const checkedCancel = $("#checked-cancel");
const uncheckConfirm = $("#uncheck-confirm");
const uncheckCancel = $("#uncheck-cancel");

function customSelectHznOptionFunc(
    customSelectHznOptionFirst,
    customSelectHznOptionSecond,
    customSelectHznOptionThird
) {
    customSelectHznOptionFirst.classList.add(
        "custom-select-hzn-options__selected"
    );
    customSelectHznOptionSecond.classList.remove(
        "custom-select-hzn-options__selected"
    );
    customSelectHznOptionThird.classList.remove(
        "custom-select-hzn-options__selected"
    );
}

function checkValueOfInputField(input, footerNewsletterLabelField) {
    if (input.value !== "") {
        footerNewsletterLabelField.style.display = "none";
    } else {
        footerNewsletterLabelField.style.display = "block";
    }
}

for (let i = 0; i < textInputs.length; i++) {
    for (let j = 0; j < footerNewsletterLabelFields.length; j++) {
        const textInput = textInputs[i];
        const footerNewsletterLabelField = footerNewsletterLabelFields[i];

        textInput.onfocus = () => {
            footerNewsletterLabelField.classList.add("top-0");
            footerNewsletterLabelField.style.color = "#757575";
        };

        textInput.onfocusout = () => {
            footerNewsletterLabelField.classList.remove("top-0");
            footerNewsletterLabelField.style.color = "#000";
        };

        setInterval(() => {
            checkValueOfInputField(textInput, footerNewsletterLabelField);

            if (
                emailInput.value === "" ||
                lastNameInput.value === "" ||
                firstNameInput.value === "" ||
                checkedConfirm.classList.contains("hidden") ||
                checkedCancel.classList.contains("hidden")
            ) {
                confirmButton.classList.add("disabled");
            } else {
                confirmButton.classList.remove("disabled");
            }
        }, 300);
    }
}

for (let i = 0; i < checkbox.length; i++) {
    for (let j = 0; j < uncheck.length; j++) {
        for (let k = 0; k < checked.length; k++) {
            const cb = checkbox[i];
            const uc = uncheck[i];
            const c = checked[i];

            cb.onclick = () => {
                if (c.classList.contains("hidden")) {
                    uc.classList.add("hidden");
                    c.classList.remove("hidden");
                    cb.style.fontWeight = 700;
                } else {
                    uc.classList.remove("hidden");
                    c.classList.add("hidden");
                    cb.style.fontWeight = 400;
                }
            };
        }
    }
}

customSelectFieldCivilityButton.onclick = () => {
    customSelectHznOptions.classList.contains("hidden")
        ? customSelectHznOptions.classList.remove("hidden")
        : customSelectHznOptions.classList.add("hidden");
};

for (let i = 0; i < customSelectHznOption.length; i++) {
    const cSHO = customSelectHznOption[i];

    cSHO.onclick = () => {
        const dataValue = cSHO.getAttribute("data-value");

        selected.innerText = dataValue;

        customSelectHznOptions.classList.add("hidden");

        cSHO.classList.add("custom-select-hzn-options__selected");

        if (dataValue === "Mrs") {
            customSelectHznOptionFunc(
                customSelectHznOption[0],
                customSelectHznOption[1],
                customSelectHznOption[2]
            );
        } else if (dataValue === "Miss") {
            customSelectHznOptionFunc(
                customSelectHznOption[1],
                customSelectHznOption[0],
                customSelectHznOption[2]
            );
        } else if (dataValue === "Mr") {
            customSelectHznOptionFunc(
                customSelectHznOption[2],
                customSelectHznOption[1],
                customSelectHznOption[0]
            );
        }
    };
}
