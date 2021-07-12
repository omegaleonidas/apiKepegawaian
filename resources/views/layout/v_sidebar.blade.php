   <!-- Sidebar Menu -->


   
   <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item" class="{{request()->is('/') ?  'active' : ''}}" >
            <a href="/dasboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
            
                Dashboard
              
         
              
         
            </a>

            </li>
            <li  class="nav-item" class="{{request()->is('/absensi') ?  'active' : ''}}" >
            <a href="/absensi" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              
                absensi kepegawaian
               
     
              </a>
              </li>
             
          <li   class="nav-item" class="{{request()->is('/cuti') ?  'active' : ''}}" >  
          <a href="/cuti" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
          
               cuti
             
   
              
             
            </a>
          </li>

          <li   class="nav-item" class="{{request()->is('/jabatan') ?  'active' : ''}}" >  
          <a href="/jabatan" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
        
               jabatan
             
    
              
             
            </a>
          </li>

          <li   class="nav-item" class="{{request()->is('/agama') ?  'active' : ''}}" >  
          <a href="/agama" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
   
              agama
             
   
              
             
            </a>
          </li>

          <li   class="nav-item" class="{{request()->is('/pegawai') ?  'active' : ''}}" >  
          <a href="/pegawai" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
    
            pegawai
             

             
            </a>
          </li>

          <li   class="nav-item" class="{{request()->is('/pegawai') ?  'active' : ''}}" >  
          <a href="/informasi" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
    
            informasi
             
    
              
             
            </a>
          </li>
           
           <li  class="nav-item" class="{{request()->is('/user') ?  'active' : ''}}"  >
           <a href="/user" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>

               user
             

              
             
            </a>
            </li>
           <li  class="nav-item" class="{{request()->is('/report') ?  'active' : ''}}" >
           
           <a href="/report" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
    
                report
             

              
             
            </a>
           
          </li>
         

      
        
        
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->



   