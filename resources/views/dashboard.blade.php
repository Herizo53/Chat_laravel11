<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("Style/style.css") }}">
    <title>Messanger</title>
</head>
<body>

    <div class="container">

        <!-------   Séction 1  ---->
        <div class="section_1">
            <div class="section_1_parent_photo">
                <div class="section_1_image" style="background-image: url(UserPhoto/{{ Auth::user()->photo }});"></div>
            </div>

            <div class="container_section_1_icone">

                <div class="paren_icone1">
                    <div class="section_1_icone" id="icone_recherche_responsive">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                          </svg>
                    </div>
                    <div class="section_1_icone" id="toutUsers">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                          </svg>
                        </div>
                    <div class="section_1_icone" id="home">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                          </svg>
                    </div>
                    <div class="section_1_icone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"/>
                          </svg>
                    </div>
                    <div class="section_1_icone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                          </svg>
                    </div>
                    <div class="section_1_icone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>
                    </div>
                </div>

                <form class="parent_icone2" action="{{ route("logout") }}" method="POST">
                    @csrf
                    <button type="submit" id="deconnexion">
                        <div class="section_1_icone">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                                <path d="M7.5 1v7h1V1z"/>
                                <path d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812"/>
                              </svg>
                        </div>
                    </button>
                </form>

            </div>

        </div>

        <!-------   Séction 2  ---->
        <div class="section_2">
            <div class="header">
                <div class="section_2_parent_recherche">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                    <input type="text" placeholder="Recherche" id="searchInput">
                </div>
                <div class="icon_fermer_section_2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                      </svg>
                </div>
            </div>

            <div class="utilisateures" id="myUL">

                @if ($counterMessage > 0)
                    @foreach ($message as $msg)
                        <a href="{{ route("voirmsg",$msg->id) }}" class="section_2_info" >

                            <div class="section_2_notification">
                                <div class="section_2_info_photo">
                                    
                                        @php
                                            $users = DB::select('select * from users where id = ?',[$msg->send_id]);
                
                                            foreach ($users as $user) {
                                                if ($user->status == "ok") {
                                                    echo ' <div class="info_photo" style="background-image: url(UserPhoto/'.$user->photo.');"></div>';
                                                    echo '<div class="status"></div>';
                                                } else {
                                                    echo ' <div class="info_photo" style="background-image: url(UserPhoto/'.$user->photo.');"></div>';
                                                    echo '<div class="status2"></div>';
                                                }
                                            }
                                        @endphp
                                    
                                </div>
                                <div class="section_2_info_text">
                                    <p class="nom_utilisateur">
                                        @php
                                            $users = DB::select('select * from users where id = ?',[$msg->send_id]);
                
                                            foreach ($users as $user) {
                                                echo $user->name;
                                            }
                                        @endphp
                                    </p>
                                    <p id="info_bul_message">{{ $msg->descriptions }}</p>
                                </div>
                            </div>
                            <div class="section_2_info_date">
                                <p>{{ $msg->created_at->diffForHumans() }}</p>
                            </div>
                        </a>
                    @endforeach
                @else
                    <h5>Aucun message</h5>
                @endif

            </div>

        </div>

        <!-------   Séction 3  ---->
        <div class="section_3">

            @if (session('userid'))
                <!-------   En tête  ---->
                <div class="header_3">
                    <div class="section_3_info">
                        <div class="section_3_info_photo">
                            <div class="section_3_photo" style="background-image: url(UserPhoto/{{ session('userphoto') }});"></div>
                            <div class="section_3_text">
                                <div class="section_3_parent_nom_status">
                                    <p class="section_3_nom_utlisateur">{{ session('username') }}</p>
                                    @if (session('userstatus') == "ok")
                                        <div class="status"></div>
                                    @else
                                        <div class="status2"></div>
                                    @endif
                                    
                                </div>

                                @if (session('userstatus') == "ok")
                                    <p class="section_3_status">En ligne</p>
                                @else
                                    <p class="section_3_status">Déconecté</p>
                                @endif
                                
                            </div>
                        </div>
                        <div class="section_3_info_icone">
                            <svg class="section_3_icone1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                                <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
                                <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
                            </svg>
                            <svg class="section_3_icone1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-gear" viewBox="0 0 16 16">
                                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                            </svg>
                            <svg class="section_3_icone1" id="openSection4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                                <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8m0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0M4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-------   Corps  ---->
                <div class="body_message">
                    @foreach ($toutms as $ms)

                        <!-------   View Droit  ---->
                        @if (($ms->send_id == Auth::user()->id) && ($ms->receive_id == session('userid')))
                            <!-------   Sans photo sans fichiers  ---->
                            @if ($ms->fichiers == "aucun fichiers")
                                <div class="message_droit">
                                    <div class="section_body_droit">
                                        <div class="section_3_parent_body">
                                            <p id="p_droit"  style="white-space: pre-wrap;">{{ $ms->descriptions }}</p>
                                            <div class="body_image" style="background-image: url(UserPhoto/{{ Auth::user()->photo }});"></div>
                                        </div>
                                        <p class="heures_d_envoi_droit">{{ $ms->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>

                            <!-------   Avec photo/ Avec fichiers  ---->
                            @else
                                @if (($ms->extesion_fichiers == "jpg") || ($ms->extesion_fichiers == "jpeg") || ($ms->extesion_fichiers == "png") || ($ms->extesion_fichiers == "gif"))
                                    <div class="message_droit">
                                        <div class="section_body_droit">
                                            <div class="section_3_parent_body">
                                                <p id="p_droit"  style="white-space: pre-wrap;">{{ $ms->descriptions }}</p>
                                                <div class="body_image" style="background-image: url(UserPhoto/{{ Auth::user()->photo }});"></div>
                                            </div>
                                        </div>                                            
                                        <a href="{{ route('download',$ms->id) }}"><img src="{{ $ms->fichiers }}" alt="" id="fichier_utilisteur" style="margin-left: 0;margin-right: 37px;"></a>
                                        <p class="heures_d_envoi_avec_fichier" style="text-align: end;margin-left: 0;margin-right: 37px;">{{ $ms->created_at->diffForHumans() }}</p>
                                    </div>
                                @else
                                    <div class="message_droit">
                                        <div class="section_body_droit">
                                            <div class="section_3_parent_body">
                                                <p id="p_droit"  style="white-space: pre-wrap;">{{ $ms->descriptions }}</p>
                                                <div class="body_image" style="background-image: url(UserPhoto/{{ Auth::user()->photo }});"></div>
                                            </div>
                                        </div>
                                        <a href="{{ route('download',$ms->id) }}" class="section_message_fichier" style="margin-left: 0;margin-right: 37px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stickies" viewBox="0 0 16 16">
                                                <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1z"/>
                                                <path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293z"/>
                                            </svg>
                                            <p id="nom_du_fichier">Télécharger le fichiers</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                                            </svg>
                                        </a>
                                        <p class="heures_d_envoi_avec_fichier" style="text-align: end;margin-left: 0;margin-right: 37px;">{{ $ms->created_at->diffForHumans() }}</p>
                                    </div>
                                @endif
                            @endif
                        @endif

                        <!-------   View gauche  ---->
                        @if (($ms->send_id == session('userid')) && ($ms->receive_id == Auth::user()->id))
                            <!-------   Sans photo sans fichiers  ---->
                            @if ($ms->fichiers == "aucun fichiers")
                                <div class="message_gauche">
                                    <div class="section_3_parent_body">
                                        <div class="body_image" style="background-image: url(UserPhoto/{{ session('userphoto') }});"></div>
                                        <p id="messagereponse" style="white-space: pre-wrap;">{{ $ms->descriptions }}</p>
                                    </div>
                                    <p class="heures_d_envoi">{{ $ms->created_at->diffForHumans() }}</p>
                                </div>

                            <!-------   Avec photo/ Avec fichiers  ---->
                            @else
                                @if (($ms->extesion_fichiers == "jpg") || ($ms->extesion_fichiers == "jpeg") || ($ms->extesion_fichiers == "png") || ($ms->extesion_fichiers == "gif"))
                                    <div class="message_gauche">
                                        <div class="section_3_parent_body">
                                            <div class="body_image" style="background-image: url(UserPhoto/{{ session('userphoto') }});"></div>
                                            <p id="messagereponse" style="white-space: pre-wrap;">{{ $ms->descriptions }}</p>
                                        </div>
                                        <a href="{{ route('download',$ms->id) }}"><img src="{{ $ms->fichiers }}" alt="" id="fichier_utilisteur"></a>
                                        <p class="heures_d_envoi_avec_fichier">{{ $ms->created_at->diffForHumans() }}</p>
                                    </div>
                                @else
                                    <div class="message_gauche">
                                        <div class="section_3_parent_body">
                                            <div class="body_image" style="background-image: url(UserPhoto/{{ session('userphoto') }});"></div>
                                            <p id="messagereponse" style="white-space: pre-wrap;">{{ $ms->descriptions }}</p>
                                        </div>
                                        <a href="{{ route('download',$ms->id) }}" class="section_message_fichier">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stickies" viewBox="0 0 16 16">
                                                <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1z"/>
                                                <path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293z"/>
                                            </svg>
                                            <p id="nom_du_fichier">Télécharger le fichiers</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                                            </svg>
                                        </a>
                                        <p class="heures_d_envoi_avec_fichier">{{ $ms->created_at->diffForHumans() }}</p>
                                    </div> 
                                @endif
                            @endif
                        @endif
                        
                    @endforeach
                </div>

                <!-------   Fotter  ---->
                <form class="fotter_message" enctype="multipart/form-data" method="POST" action="{{ route('send') }}">
                    @csrf
                    <div class="section_3_envoye_message">
                        <div class="section_3_select_fichier">
                            <svg id="icone_file" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                            </svg>
                            <input type="file" id="inputFile" name="fichiersender">
                        </div>
                        <textarea name="description" id="description" cols="50" rows="1" placeholder="Message"></textarea>
                    </div>
                    
                    <input type="hidden" value="{{ session('userid') }}" name="id_receive" id="userIdsender">
                    <button style="border: none; background-color: transparent; outline: none;"  type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                        <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
                    </svg></button>

                </form>
            @else
                <div class="section_3_pub">

                    <div class="bare_pub">

                        @if (session('errorFIle'))
                            <div id="notification" class="notification">❌ {{ session('errorFIle') }}</div>
                        @endif

                        @if (session('pubSuccess'))
                        <div id="notification" class="notification">✅ {{ session('pubSuccess') }}</div>
                        @endif

                        <form action="{{ route('publications') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <textarea name="article" id="" cols="30" rows="2" placeholder="Votre publications"></textarea>
                            <div class="photo_pub">
                                <input type="file" name="photoPub">
                                <svg id="photoPub" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                    <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1z"/>
                                  </svg>
                            </div>
                            <button type="submit">Publier</button>
                        </form>
                    </div>

                    <!--    Corps du publications   -->
                    <div class="corps_publications">

                        @foreach ($pub as $pubs)
                            <div class="parent_publication_users">
                                <!----- Information users------------>
                                <div class="info_profile_pub">
                                    <div class="parent_nom_photo">
                                        @php
                                            $users = DB::select('select * from users where id = ?',[$pubs->id_user]);
                
                                            foreach ($users as $user) {
                                                echo '<div class="photo_pub_user" style="background-image: url(UserPhoto/'.$user->photo.');"></div>';
                                            }
                                        @endphp
                                        
                                        <div class="info_nom_sate">

                                            @php
                                                $users = DB::select('select * from users where id = ?',[$pubs->id_user]);
                    
                                                foreach ($users as $user) {
                                                    echo '<p>'.$user->name.'</p>';
                                                }
                                            @endphp
                                            <div class="date_pub">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
                                                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
                                                </svg>
                                                <span>{{ $pubs->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <svg id="option_pub" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
                                    </svg>
                                </div>

                                <p id="text_publier">{{ $pubs->article }}</p>

                                <!----- Image à publier Users -------->

                                @if ($pubs->photo_pub == "aucun photo")
                                    
                                @else
                                    <div class="parent_image_publier">
                                        <div class="enfent_image_publier">
                                            <div class="photo_user_publier" style="background-image: url({{ $pubs->photo_pub }});"></div>
                                        </div>
                                    </div>
                                @endif
                                
                            </div>
                        @endforeach
                        

                    </div>
                </div>
            @endif

        </div>

        <!-------   Séction 4  ---->
        <div class="section_4">
            <div class="icon_fermer_section_2" id="fermerSection4">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                  </svg>
            </div>

            <div class="section_4_photo">
                <div class="section_profile_section_4" style="background-image: url(UserPhoto/{{ Auth::user()->photo }});"></div>
                <div class="section_envelop1"></div>
                <div class="envelop2"></div>
            </div>
            <br>
            <div class="section_4_text">
                <p class="section_4_text1">{{ Auth::user()->name }}</p>
                <p class="section_4_text2">En ligne</p>
            </div>

            <div class="section_4_parent_icone">
                <div class="section_4_icone">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-exclamation" viewBox="0 0 16 16">
                        <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
                        <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0z"/>
                      </svg>
                </div>
                <div class="section_4_icone">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window-split" viewBox="0 0 16 16">
                        <path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                        <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v2H1V3a1 1 0 0 1 1-1zM1 13V6h6.5v8H2a1 1 0 0 1-1-1m7.5 1V6H15v7a1 1 0 0 1-1 1z"/>
                    </svg>
                </div>
                <div class="section_4_icone">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
                      </svg>
                </div>
                <div class="section_4_icone">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                      </svg>
                </div>
                <div class="section_4_icone">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"/>
                      </svg>
                </div>
            </div>

            <div class="section_4_status">
                <p>Attachements</p>
                <div class="nombre_message">
                    OK
                </div>
            </div>

            <div class="attachements">
                @foreach ($attch as $atc)
                    @if ($atc->receive_id == Auth::user()->id)
                        @if ($atc->fichiers == "aucun fichiers")
                            
                        @else
                            @if (($atc->extesion_fichiers == "jpg") || ($atc->extesion_fichiers == "jpeg") || ($atc->extesion_fichiers == "png") || ($atc->extesion_fichiers == "gif"))
                                <div class="image_attachement" style="background-image: url({{ $atc->fichiers }});"></div>
                            @endif 
                        @endif
                    @endif
                @endforeach
                
            </div>

        </div>

        <!-------   Séction Tout utilisateurs  ---->

        <div class="grand_parent_tout_tuilisateurs">

            <div class="parent_tout_utilisaters">

                <div class="tout_utilisateur">

                    <div class="icon_fermer_section_utilisateurs">
                        <div class="icon_fermer_utilisateurs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>
                    </div>

                    <!--  S'il n'y a pas d'utilisateur que vous  -->
                    @if ($totalUser < 2)
                        <h5>Aucun amis</h5>
                    @else
                        <!-- Affiché tout utilisateur sauf que vous --->
                        <div id="us"></div>
                    @endif

                </div>

            </div>
        </div>
        
    </div>
    
    <script src="{{ asset("Javascript/jquery.js") }}"></script>
    <script src="{{ asset("Javascript/messanger.js") }}"></script>
</body>
</html>