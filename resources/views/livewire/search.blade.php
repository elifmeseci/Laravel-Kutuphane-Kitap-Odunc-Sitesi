<div>
    {{-- The whole world belongs to you --}}
    <input wire:model="search" name="search" type="text" class="input header-search-input" list="mylist" placeholder="Search product..." />

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
