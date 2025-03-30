@foreach ($users as $user)

    @if ($user->id == Auth::user()->id)
                                
    @else
        <div class="users">
            <div style="display: flex;align-items: center;gap: 5px;">
                <div>
                    <div class="section_3_photo" style="background-image: url(UserPhoto/{{ $user->photo }});"></div>
                                            
                    <!---- Status en ligne ---->
                                        
                    @if ($user->status == "ok")
                        <div class="status"></div>
                    @else
                        <div class="status2"></div>
                    @endif

                </div>
                <p class="nomUser">{{ $user->name }}</p>
            </div>
            <a href="{{ route("message",$user->id) }}"><button>Message</button></a>
        </div>
    @endif
                            
@endforeach

