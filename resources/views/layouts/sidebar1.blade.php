<ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                @if(Auth::user()->gambar == '')

                  <img src="{{asset('images/user/default.png')}}" alt="profile image">
                @else

                  <img src="{{asset('images/user/'. Auth::user()->gambar)}}" alt="profile image">
                @endif
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{Auth::user()->name}}</p>
                  <div>
                    <small class="designation text-muted" style="text-transform: uppercase;letter-spacing: 1px;">{{ Auth::user()->level }}</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item {{ setActive(['/', 'home']) }}"> 
            <a class="nav-link" href="{{url('/')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          @if(Auth::user()->level == 'admin')
          <li class="nav-item {{ setActive(['anggota*', 'buku*', 'user*']) }}">
            <a class="nav-link " data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Master Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ setShow(['anggota*', 'buku*', 'user*']) }}" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link {{ setActive(['anggota*']) }}" href="{{route('anggota.index')}}">Data Anggota</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ setActive(['buku*']) }}" href="{{route('buku.index')}}">Data Konsultan</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link {{ setActive(['user*']) }}" href="{{route('user.index')}}">Data User/Admin</a>
                </li>
              </ul>
            </div>
          </li>
          @endif
          
     <li class="nav-item {{ setActive(['transaksi*', 'workout*']) }}">
            <a class="nav-link " data-toggle="collapse" href="#ui-bas" aria-expanded="false" aria-controls="ui-bas">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ setShow(['transaksi*', 'workout*']) }}" id="ui-bas">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link {{ setActive(['transaksi*']) }}" href="{{route('transaksi.index')}}">Data Konsultasi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ setActive(['workout*']) }}" href="{{route('workout.index')}}">Data Daily Progress</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ setActive(['nutrisi*']) }}" href="{{route('nutrisi.index')}}">Data Nutrisi Progress</a>
                </li>
              </ul>
            </div>
          </li>
        

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-laporan" aria-expanded="false" aria-controls="ui-laporan">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Laporan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-laporan">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('laporan/trs')}}">Laporan Daily</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="{{url('laporan/buku')}}">Laporan Konsultan</a>
                </li>
              </ul>
            </div>
          </li>
        
        </ul>