            @if (session('success'))
            
                <p style="color:yellowgreen">{{session('success')}}</p>
             @endif
             @if (session('message'))
             <p style="color:rgb(50, 169, 205)">{{session('message')}}</p>
              @endif

             @if (session('error'))
             <p style="color:rgb(205, 120, 50)">{{session('error')}}</p>
              @endif

              @if (session('status'))
              <p style="color:rgb(50, 104, 205)">{{session('status')}}</p>
              @endif

             @if ($errors->any())
          
             @foreach ($errors->all() as $error)
             <p style="color:rgb(205, 138, 50)">{{$error}}</p>
             @endforeach
            </div>
            @endif