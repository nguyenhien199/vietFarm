<div class="navbar-menu" id="navbar-mobile">
    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-circle"></i> </a>
    <div class="navbar-end float-right">
        <div class="navbar-item">
            <nav class="text-right">
                <li style="list-style: none;cursor: pointer;display: inline-block;" class="user-hearder">
                    Chào đón đến với VietFarmSolution <span class="img">{{strtoupper(Auth::user()->name[0])}}</span>
                    <div class="manage_user">
                        <div class="header-user" title="Account">Account</div>
                        <div class="body-user">
                            <div class="image">
                                <span class="img">{{strtoupper(Auth::user()->name[0])}}</span>
                            </div>
                            <div class="info-user">
                                <div class="_1njv2a9PIrnydF">{{Auth::user()->name}}</div>
                                <span class="_2TvKKP0vwCN5Zd">{{Auth::user()->email}}</span>
                            </div>
                        </div>
                        <div class="setting">
                            <nav>

                <a href="{{url('admin/setting')}}"><li><i class="fa fa-cog mr-5"></i>Setting</li></a>
                <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="button is-primary is-medium has-text-weight-semibold btn-logout" type="submit">
                            <i class="fa fa-sign-out mr-5"></i>Logout
                        </button>
                    </form>
                </li>
            </nav>
        </div>
    </div>
    </li>
    </nav>
</div>
