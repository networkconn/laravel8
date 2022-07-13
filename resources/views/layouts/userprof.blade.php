<div class="card">
    <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
        <div class="ms-4 ml-5 mt-5 d-flex flex-column" style="width: 150px;">
            @if (Request::user()->image )
                <img src="{{ asset('storage/' . Request::user()->image) }}"
                    alt="{{ Request::user()->name }}" class="img-fluid img-thumbnail mt-4 mb-2"
                    style="width: 150px; z-index: 1">
            @else
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                    alt="user" class="img-fluid img-thumbnail mt-4 mb-2"
                    style="width: 150px; z-index: 1">
            @endif
            <a href="/profile/edit">
                <button type="button" class="btn btn-sm btn-warning" style="z-index: 1;">
                    Edit profile
                </button>
            </a>
        </div>
        <div class="ms-3 ml-3" style="margin-top: 130px;">
            <h5>{{ auth()->user()->name }}</h5>
            <p>{{ auth()->user()->email }}</p>
        </div>
    </div>
    <div class="p-4 text-black" style="background-color: #f8f9fa;">
        <div class="d-flex justify-content-end text-center py-1"></div>
    </div>
    <div class="card-body p-4 text-black">
        <div class="mb-5">
            <div class="p-4" style="background-color: #f8f9fa;">
                @if (Request::user()->tentang )
                    <p class="font-italic mb-1">{{ Request::user()->tentang }}</p>
                @else
                    <p class="font-italic mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta itaque libero minus, laborum expedita cupiditate perspiciatis vitae? Inventore iure, ad autem, repudiandae, nobis perferendis doloremque rerum eos similique atque nihil?</p>
                @endif
            </div>
        </div>
    </div>
</div>