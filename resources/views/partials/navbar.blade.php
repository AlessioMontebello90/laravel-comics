<nav>
    <ul class="d-flex list-unstyled">
        @foreach ($arrList as $item)
            <li><a class="text-decoration-none text-dark" href="#">{{ $item['title'] }}</a></li>
        @endforeach
    </ul>
</nav>
