@php
    $notifications = auth()->user()->notification_received;
    $image = isset(Auth::user()->image)
        ? url(URL::to('/') . '/storage/app/public/attachment/' . Auth::user()->image)
        : url(URL::to('/') . '/img/avatar-not-founf-photo-perfil.png');
@endphp
<section class="navegation-header">
    <div class="navegation-item navegation-text ml-3">
        for<strong>LEARN</strong><sup>&reg;</sup>
    </div>
    <div class="navegation-item navegation-search" hidden>
        <input class="text-dark" type="search" name="search" id="search" placeholder="Procurar" />
        <div>
            <i class="fas fa-search text-primary"></i>
        </div>
    </div>
    <div class="navegation-item navegation-option">
        <div id="option-bell">
            <div class="menu-item dropdown-sub hidden-submenu perm bg-transparent">
                <div class="menu-link text-white position-relative nav-bill d-flex">
                    <i class="fas fa-bell"></i>
                    <sup class="rounded-circle bg-bell">{{ count_notification() }}</sup>
                </div>
                <ul class="dropdown-submenu list-group list-border-none m-2">
                    @empty($notifications)
                        <li class="list-group-item">
                            <a class="" href="#">
                                <i class="fas fa-circle-exclamation mr-2"></i>
                                <span>Nenhuma notificação nova</span>
                            </a>
                        </li>
                    @else
                        @foreach ($notifications as $item)
                            <?php if($loop->index == 3 ) break; ?>
                            <li class="list-group-item" data-id="{{ $item->id }}">
                                <a class="" target="_blank"
                                    href='{{ 'https://' . $_SERVER['HTTP_HOST'] . '/central-notification/' . $item->id }}'>
                                    <div>
                                        <i class="{{ $item->icon }} mr-2"> </i>
                                        <strong>{{ $item->subject }}</strong>
                                    </div>
                                    <div class="">{{ strip_tags(mb_strimwidth($item->body_messenge, 0, 59, ' ...')) }}</div>
                                </a>
                            </li>
                        @endforeach
                    @endempty
                    <li class="list-group-item" id="vermais">
                        <a class="" href="#" target="_blank">
                            <i class="fas fa-bars mr-2"></i>
                            <span>Apoio forLEARN</span>
                            <span style="font-size: 30px; margin-bottom: -20px;">&#174;</span>
                        </a>
                    </li>
                    <li class="list-group-item" id="vermais">
                        <a class="" href='{{ 'https://' . $_SERVER['HTTP_HOST'] . '/central-notification' }}'
                            target="_blank">
                            <i class="fas fa-list mr-2"></i>
                            <span>Ver todas notificações</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="option-name" class="pl-2">
            <div>{{ Auth::user()->name }}</div>
        </div>
        <div id="option-avatar">
            <img id="img-avatar" src="{{ $image }}" alt="" />
        </div>
        <div id="option-choose">
            <div class="menu-item dropdown-sub hidden-submenu perm">
                <a class="menu-link" href="#" role="button">
                    <i class="fas fa-ellipsis-v fa-1x text-white"></i>
                </a>
                <ul class="dropdown-submenu list-group list-border-none m-2">
                    <li class="list-group-item">
                        <a class="" href='{{ route('users.show', Auth::user()->id) }}' target="_blank">
                            <span>Meu perfil</span>
                        </a>
                    </li>
                    <li class="list-group-item" id="btn-logautt-sys">
                        <a class=" position-relative" href='{{ 'https://' . $_SERVER['HTTP_HOST'] . '/logout' }}'
                            target="_blank">
                            <span class="float-right">Sair</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="option-theme" class="d-none">
            <button type="button" id="btn-mode" class="menu-link btn-none mr-2" data-bs-toggle="tooltip"
                data-bs-placement="bottom" data-bs-title="Modo Dark" theme="dark">
                <i class="fas fa-moon fa-1x text-white" id="icon-theme"></i>
            </button>
        </div>
    </div>
</section>
