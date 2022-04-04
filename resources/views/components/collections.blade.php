@foreach ($collection as $item)
    <div class="collections">
        <div class="collections__visuals">
            <a class="collections-image-link" href="{{ route('collection.index',['colID'=>$item->id, 'type'=> $item->typeproduct] ) }}">
                <div class="image" style="display: table; position: relative; width: 100%; padding-bottom: 42.8472%; overflow: hidden;">
                    <img src="{{ $item->hinhanh }}" alt="{{ $item->nameCol }}" style="position: absolute; width: 100%; top: 0px; left: 0px;">
                </div>
            </a>
        </div>
        <div class="collections__image-infos">
            <a class="collections-image-link" href="{{ route('collection.index',['colID'=>$item->id, 'type'=> $item->typeproduct] ) }}">
                <div class="collections-subtitle">{{ $item->tenloaihang }}</div>
                <span class="title-with-level collections-title text-uppercase" style="color: black;">
                    <span class="multiline-text">{{ $item->nameCol }}</span>
                </span>
                <div class="static-button">
                    <span class="button">
                        <span class="button-content">
                            <span class="button__title">DISCOVER</span>
                        </span>
                    </span>
                </div>
            </a>
        </div>
    </div>

@endforeach