@extends('layouts.app')

@section('content')

	

	

        <div class="container" >
  
		                

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

                  <th colspan="4" ><select  class="wingsnames text-center" id="select" name="radio" onchange="populate(this.id,'slct2')">
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
                    <input type="text" id="wewe" name="Thesummation" value="100" style="display:none;">
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

              <input class="button" type="submit" name="submit"> 

          </form>
		    		
	  </div>

@endsection