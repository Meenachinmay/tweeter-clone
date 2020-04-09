<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul>
    @foreach(range(1,6) as $index)
        <li class="mb-4">
            <div class="flex items-center text-sm text-gray-700">
                <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/f8/f832fa68b3d29f607aef52348b9e36c76dc3502e.jpg"
                     alt="Friends profile image"
                     class="rounded-full mr-2"
                >
                Chinmay anand
            </div>
        </li>
    @endforeach
</ul>
