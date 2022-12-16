<nav>
        <div class="container nav__container">
            <a href="{{route('home')}}"><h4>DETECTRUTH</h4></a>
            <ul class="nav_menu">
                <li><a href="{{route('dashboard')}}">Statistics</a></li>
                <li><a href="{{route('emergencyContact.index')}}">Emergency</a></li>
                @guest
                <li><a href="{{route('login')}}" style="color:#69C4EB" ><strong>LOG IN</strong>  </a></li>
                <li><a href="{{route('register')}}" style="color:#69C4EB" ><strong>Register</strong>  </a></li>
                @endguest
                @auth
                <li><a href="{{route('crime.myReports')}}">Reports</a></li>
                @if(Auth::user()->isAdmin())
                <li><a href="{{route('crime.admin')}}" style="color:#69C4EB" ><strong>Admin</strong>  </a></li>
                @endif
                <li><a href="#" style="color:#69C4EB" ><strong>{{Auth::user()->name}}</strong>  </a></li>
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="btn btn-primary" style="color:#69C4EB"  type="submit"> Logout</button>
                    </form>
                </li>

                @endauth

                
                <!-- Another way: 
                <li><a href="statistics.html">Statistics</a></li>--> 
                <!--<li><a href="explore.html">Log Crime & Statistics</a></li>
                <li><a href="explore.html">Log Crime</a></li>
                <li><a href="statistics.html">Statistics</a></li> 
                <li><a href="emergency.html">Emergency</a></li>
         <a class="cta" href="#"><button>Log In</button></a> -->   
            </ul>
         </div>
    </nav>  