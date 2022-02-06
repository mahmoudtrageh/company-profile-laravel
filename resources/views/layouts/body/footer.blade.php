
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
          @php
            $contact = DB::table('contacts')->first();
            $settings = DB::table('settings')->first();
          @endphp
          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>الشركة</h3>
            <p>
              {{$contact->address}}<br>
              <strong>الهاتف:</strong> {{$contact->phone}}<br>
              <strong>البريد الإلكتروني:</strong> {{$contact->email}}<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>روابط</h4>
            <ul>
              <li><i class="bx bx-chevron-left"></i> <a href="{{url('/')}}">الرئيسية</a></li>
              <li><i class="bx bx-chevron-left"></i> <a href="{{route('portfolio')}}">معرض الأعمال</a></li>
              <li><i class="bx bx-chevron-left"></i> <a href="{{route('contact')}}">اتصل بنا</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>اشترك في قائمتنا البريدية</h4>
            <p>اشترك لكي تحصل علي أخر تحديثاتنا وأخبارنا</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="اشترك">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="row">
      <div class="col-md-6">
        <div class="text-right">
          <div class="copyright">
           جميع الحقوق محفوظة &copy; 2022 <strong><span>{{$settings->site_name}}</span></strong> 
          </div>
          
          </div>
       
      </div>
      <div class="col-md-6">
        <div class="social-links text-center text-md-left pt-3 pt-md-0">
          <a href="{{$settings->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="{{$settings->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="{{$settings->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="{{$settings->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>