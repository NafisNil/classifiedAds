@if (session('success'))
          
                  <p style="color: green">{{ session('success') }}</p>  
            
             @endif
             @if (session('message'))
          
                    <p style="color:yellowgreen">{{ session('message') }}</p> 
                 
              @endif

              @if (session('status'))
            
                    <p style="color:antiquewhite"></p> {{ session('status') }}
               
              @endif

             @if (session('error'))
          
                   <p style="color:red"> {{ session('error') }}</p> 
         
              @endif

             @if ($errors->any())
          
                    @foreach ($errors->all() as $error)
                        <span><p style="color:tomato">{{ $error }}</p></span>
                    @endforeach
               
            @endif