<ul id="side-menu" class="nav"> 
<li class="user-panel"> 
    <div class="thumb">
        <img src="{{asset('myadmin/images/gallery/128.jpg')}}" alt="" class="img-circle" /> 
    </div> 
    <div class="info"> 
        <p>John Doe</p> 
        <ul class="list-inline list-unstyled"> 
        <li><a href="extra-profile.html" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a> </li> 
        <li><a href="email-inbox.html" data-hover="tooltip" title="Mail"><i class="fa fa-envelope"></i></a> </li> 
        <li><a href="#" data-hover="tooltip" title="Setting" data-toggle="modal" data-target="#modal-config"><i class="fa fa-cog"></i></a> </li> 
        <li><a href="extra-signin.html" data-hover="tooltip" title="Logout"><i class="fa fa-sign-out"></i></a> </li> 
        </ul> 
    </div> 
    <div class="clearfix"></div> 
</li> 
<li><a href="index.html"><i class="fa fa-tachometer fa-fw">
    <div class="icon-bg bg-orange"></div></i><span class="menu-title">Dashboard</span></a> 
</li> 
<li><a href="#"><i class="fa fa-desktop fa-fw">
    <div class="icon-bg bg-pink"></div></i><span class="menu-title">Vue管理</span><span class="fa arrow"></span></a> 
    <ul class="nav nav-second-level"> 
        <li><a href="{{url('component')}}"><i class="fa fa-align-left"></i><span class="submenu-title">组件管理</span></a> </li>
        <li><a href="{{url('page')}}"><i class="fa fa-align-left"></i><span class="submenu-title">页面管理</span></a> </li>
        <li><a href="{{url('app')}}"><i class="fa fa-align-left"></i><span class="submenu-title">单页应用管理</span></a> </li>
    </ul> 
</li> 
<li><a href="#"><i class="fa fa-send-o fa-fw">
    <div class="icon-bg bg-green"></div></i><span class="menu-title">系统管理</span><span class="fa arrow"></span></a> 
    <ul class="nav nav-second-level"> 
        <li><a href="ui-panels.html"><i class="fa fa-th-large"></i><span class="submenu-title">用户管理</span></a> </li> 
        <li><a href="ui-panels.html"><i class="fa fa-th-large"></i><span class="submenu-title">系统日志</span></a> </li>
        <li><a href="ui-panels.html"><i class="fa fa-th-large"></i><span class="submenu-title">系统设置</span></a> </li>  
    </ul> 
</li> 
</ul> 