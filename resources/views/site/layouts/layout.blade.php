<!DOCTYPE html>
<html lang="ar" dir="rtl">
  @php
  
 
  //    $sitedataCtrlr=new App\Http\Controllers\Web\SiteDataController();  
  //   $mainarr=$sitedataCtrlr->FillStaticData();
     
  // if(isset($lang)){
  //   $transarr=$sitedataCtrlr->FillTransData( $lang);
  // }else{
  //   $transarr=$sitedataCtrlr->FillTransData();
  // }
  
  //  $defultlang=$transarr['langs']->first();
  //  $fsectionsarr=$sitedataCtrlr->getfooterLocation($defultlang->id);  
  //  $menuarr=$sitedataCtrlr->getmainmenu($defultlang->id);
  //  $catalog=$sitedataCtrlr->getcatalog($defultlang->id);
    @endphp
  
  @include('site.layouts.head') 
  @include('site.layouts.header') 

  @yield('content')
  @include('site.layouts.footer')
 
 
</html>
