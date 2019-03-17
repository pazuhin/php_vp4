<div class="sidebar-item">
    <div class="sidebar-item__title">Категории</div>
    @foreach($categories as $category)
        <div class="sidebar-item__content">
            <ul class="sidebar-category">
                <li class="sidebar-category__item">
                    <a href="{{ route('category_action', ['id' => strtolower($category->id)]) }}"
                            class="sidebar-category__item__link">{{$category->name}}</a>
                </li>
            </ul>
        </div>
    @endforeach
</div>