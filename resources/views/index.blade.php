@extends('layouts.app')

@section('content')

<main dir="rtl" class="mt-5">
      <div class="container text-right">
        <section class="my-5">

          <div class="parent ">
            <img class="image1 asasas" src="images/image/BACKGROUND.png" />
            <img class="image2 rotate_Wing" src="images/image/BACKGROUND2.png" />
            <h1 class="image3 rotate_Wing2">المعرفة</h1>
          </div>
        </section>

        <hr class="my-5" />

        <div class="container ml">



        </div>

        <div class="buttoncontainer">

          <div class="row">
            <button id="Mybtn" class="col-sm mb-3 buttonclass" type="button" onclick="disappear(1)" name="button">جدول التقييم اليومي للقاطع</button>
            <br>
            <button id="Mybtn" class="col-sm mb-3 buttonclass" type="button" onclick="disappear(2)" name="button">جدول التقييم اليومي للغرف</button>
            <br>
            <button id="Mybtn" class="col-sm mb-3 buttonclass" type="button" onclick="disappear(3)" name="button">جدول الحضور اليومي</button>
          </div>

        </div>

        <div class="container" >


    
          @if ($message = Session::get('seccess'))
          <div class="alert alert-primary container" role="alert">
            {{$message}}
          </div>  
          @endif


        <div class="container">

          
            <div class="custom-control custom-checkbox mb-3"></div>
            <table class="table" style="text-align:center;">
              <thead class="thead-light">
                <tr>
                  <th rowspan="2"> <p  style="transform:Translate(0px, 9px) ;" >جدول متابعة تنظيف القاطع</p> </th>
                </tr>

              </thead>
            </table>
             <form id="MyForm" class="was-validated forms" action="{{route('leader.store')}}" method="POST">
            @csrf
            <table class="table" style="text-align:center;">
              <thead class="thead-light">
              
                <tr>
                  <th scope="col">العدد</th>
                  <th scope="col">الفقرة</th>
                  <th scope="col">10</th>
                  <th scope="col">5</th>
                  <th scope="col">0</th>
                </tr>
              </thead>
              </tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>باب الجناح</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radiOne" id="radio1" value="10" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radiOne" id="radio1" value="5" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radiOne" id="radio1" value="0" onClick="summerize(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td> ارضية الجناح</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radioTwo" id="radio2" value="10" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioTwo" id="radio2" value="5" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioTwo" id="radio2" value="0" onClick="summerize(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>ترتيب مكان المكواة</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radioThree" id="radio3" value="10" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioThree" id="radio3" value="5" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioThree" id="radio3" value="0" onClick="summerize(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>تفريغ حاوية النفايات</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radioFour" id="radio4" value="10" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioFour" id="radio4" value="5" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioFour" id="radio4" value="0" onClick="summerize(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>خزانة الاحذية</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radioFive" id="radio5" value="10" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioFive" id="radio5" value="5" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioFive" id="radio5" value="0" onClick="summerize(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>الصحيات</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radioSix" id="radio6" value="10" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioSix" id="radio6" value="5" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioSix" id="radio6" value="0" onClick="summerize(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>سلم الطابق الاول مع صحن الدرج</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radioseven" id="radio7" value="10" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioseven" id="radio7" value="5" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioseven" id="radio7" value="0" onClick="summerize(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>براد الماء</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radioIeght" id="radio8" value="10" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioIeght" id="radio8" value="5" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioIeght" id="radio8" value="0" onClick="summerize(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>تنظيف فلتر المكنسة</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radioNine" id="radio9" value="10" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioNine" id="radio9" value="5" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioNine" id="radio9" value="0" onClick="summerize(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td>تعطير الجناح</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radioTen" id="radio10" value="10" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioTen" id="radio10" value="5" onClick="summerize(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radioTen" id="radio10" value="0" onClick="summerize(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="col">اسم الجناح</th>

                  <th colspan="4" ><select  class="wingsnames text-center" id="select" name="theSection" onchange="populate(this.id,'slct2')">
                    <option class="text-center" selected>اختر اسم القاطع...</option>
                    <option class="text-center" value="المعرفة">المعرفة</option>
                    <option class="text-center" value="العلم">العلم</option>
                    <option class="text-center" value="الحمكة">الحمكة</option>
                    <option class="text-center" value="الابداع">الابداع</option>
                    <option class="text-center" value="الريادة">الريادة</option>
                    <option class="text-center" value="التميز">التميز</option>
                    <option class="text-center" value="النجاح">النجاح</option>
                  </select></th>

                  </tr>
                <tr>

                  <td>المجموع</td>
                  <td colspan="3">
                    <input type="text" id="wewe" name="TheSummation" value="100" style="display:none;">
                    <label id="totalprice" for="wewe">0</label>
                  </td>
                </tr>

                <tr>
                  <td></td>
                  <td>اسم المتابع</td>
                  <td colspan="3">
                    <input type="text" name="theSupervisor">
                  </td>
                </tr>
                </tbody>

            </table>

            <input style="display: none;" type="text" name="theDate" value="@php echo date('d/m'); @endphp">

              <input class="button" type="submit" name="submit"> 

          </form>






        <div class="container">

          <form id="MyForm1" class="was-validated forms" action="save data1.php" method="POST">
            <div class="custom-control custom-checkbox mb-3"></div>
            <table class="table" style="text-align:center;">
              <thead class="thead-light">
                <tr>
                  <th rowspan="2"> <p  style="transform:Translate(0px, 9px) ;" >جدول متابعة تنظيف الغرفة</p> </th>
                </tr>

              </thead>
            </table>
            <table class="table" style="text-align:center;">
              <thead class="thead-light">
                <tr>
                  <th scope="col">العدد</th>
                  <th scope="col">الفقرة</th>
                  <th scope="col">10</th>
                  <th scope="col">5</th>
                  <th scope="col">0</th>
                </tr>
              </thead>
              </tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>باب الجناح الغرفة</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radio1" id="radio21" value="10" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio1" id="radio21" value="5" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio1" id="radio21" value="0" onClick="summerize1(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td> ارضية الغرفة</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radio2" id="radio22" value="10" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio2" id="radio22" value="5" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio2" id="radio22" value="0" onClick="summerize1(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>ترتيب الاسرة</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radio3" id="radio23" value="10" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio3" id="radio23" value="5" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio3" id="radio23" value="0" onClick="summerize1(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>ترتيب السيارات الكهربائية</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radio4" id="radio24" value="10" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio4" id="radio24" value="5" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio4" id="radio24" value="0" onClick="summerize1(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>رفع الاغراض من ارضية الغرفة</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radio5" id="radio25" value="10" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio5" id="radio25" value="5" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio5" id="radio25" value="0" onClick="summerize1(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>رفع الاغراض من سقف الكنتور</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radio6" id="radio26" value="10" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio6" id="radio26" value="5" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio6" id="radio26" value="0" onClick="summerize1(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>نظافة الشراشف</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radio7" id="radio27" value="10" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio7" id="radio27" value="5" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio7" id="radio27" value="0" onClick="summerize1(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>توحيد الالوان</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radio8" id="radio28" value="10" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio8" id="radio28" value="5" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio8" id="radio28" value="0" onClick="summerize1(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>تهوية الغرفة + تنظيف الشباك</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radio9" id="radio29" value="10" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio9" id="radio29" value="5" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio9" id="radio29" value="0" onClick="summerize1(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td>افراغ سلة المهملات</td>
                  <td>
                    <input class="checkbox1" type="radio" name="radio10" id="radio30" value="10" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio10" id="radio30" value="5" onClick="summerize1(this)" required>
                  </td>
                  <td>
                    <input class="checkbox2" type="radio" name="radio10" id="radio30" value="0" onClick="summerize1(this)" required>
                  </td>
                </tr>
                <tr>
                  <th scope="col">اسم الجناح</th>

                  <th colspan="4" ><select  class="wingsnames text-center" id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
                    <option class="text-center" selected>اختر اسم القاطع...</option>
                    <option class="text-center" value="المعرفة">المعرفة</option>
                    <option class="text-center" value="العلم">العلم</option>
                    <option class="text-center" value="الحمكة">الحمكة</option>
                    <option class="text-center" value="الابداع">الابداع</option>
                    <option class="text-center" value="الريادة">الريادة</option>
                    <option class="text-center" value="التميز">التميز</option>
                    <option class="text-center" value="النجاح">النجاح</option>
                  </select></th>

                  </tr>

                  <tr>
                    <th scope="col">رقم الغرفة</th>
                    <td colspan="4">
                    <select  id="slct2" class="radio34" type="number" name="slct2" placeholder="رقم الغرفة">
                      <option class="text-center" selected>اختر رقم الغرفة...</option>
                    </select>

                    </td>
                  </tr>
                <tr>
                  <td></td>
                  <td>المجموع</td>
                  <td colspan="3">
                    <input type="text" id="wewe" name="radio21" value="" style="display:none;">
                    <label id="totalprice1" for="wewe">0</label>
                  </td>
                </tr>

                <tr>
                  <td></td>
                  <td>اسم المتابع</td>
                  <td colspan="3">
                    <input type="text" name="radio23">
                  </td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="wrap">
              <button class="button"> <b>حفظ</b> </button>
            </div>

          </form>
        </div>


        <div class="container">

          <form id="MyForm2" class="was-validated forms" action="save data2.php" method="POST">
            <div class="custom-control custom-checkbox mb-3"></div>

            <table class="table" style="text-align:center;">

              </tbody>
                <tr>
                  <th scope="col">اسم الجناح</th>

                  <th><select  class="wingsnames text-center" id="">
                    <option class="text-center" selected>اختر اسم القاطع...</option>
                    <option class="text-center" value="1">المعرفة</option>
                    <option class="text-center" value="2">العلم</option>
                    <option class="text-center" value="3">الحمكة</option>
                    <option class="text-center" value="4">الابداع</option>
                    <option class="text-center" value="5">الريادة</option>
                    <option class="text-center" value="6">التميز</option>
                    <option class="text-center" value="7">النجاح</option>
                  </select></th>


                  </tr>
                  <tr>
                    <th scope="col">مدير الجناح</th>
                    <td colspan="">
                      <input class="radio34" type="text" name="radio34">
                    </td>
                  </tr>
                  <tr>
                    <th scope="col">اسماء الغياب</th>

                    <td colspan="">
                      <input class="names radio34" type="text" name="radio35" placeholder="ضع علامة الفارزة بين الاسم والآخر" >
                    </td>

                  </tr>
                </tbody>
            </table>
            <br>
            <div class="wrap">
              <button class="button"> <b>حفظ</b> </button>
            </div>

          </form>
        </div>


      </div>
    </main>
@endsection
