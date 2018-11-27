@extends('layouts.app2')

@section('content')



<div class="container">
    <div class='row'>
        <div class=" col-lg-4 mr-auto ml-auto">
            <div class='row'>
                <div class="cardappointment">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h2>Quotation Report</h2>
                                            <div class="dummy"></div>

                                        </div>
                                    </div>
                                    <div id="sc_table_1366399784_wrap" class="sc_table_wrap">
                                        <div id="sc_table_1366399784" class="sc_table sc_table_default" style="width:100%;">
                                            <p></p>
                                            <table summary="Table example" cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Service</th>
                                                        <th>QT</th>
                                                        <th>Unit price</th>
                                                        <th>Total price</th>

                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">1</td>
                                                        <td style="text-align: center;">{{$service[0]->name}}</td>
                                                        <td style="text-align: center;"><input id="q1" onchange="myfunction()" type="text" value="{{ $service[0]->price}}"></td>
                                                        <td style="text-align: center;"><input id="uprice1" type="text" value="{{ $service[0]->price}}"disabled></td>
                                                        <td style="text-align: center;"><input id="tprice1" type="text"disabled></td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">2</td>
                                                        <td style="text-align: center;">{{$service[1]->name}}</td>
                                                        <td style="text-align: center;"><input id="q2" onchange="myfunction()" type="text" value="{{ $service[1]->price}}"></td>
                                                        <td style="text-align: center;"><input id="uprice2" type="text" value="{{ $service[1]->price}}"disabled></td>
                                                        <td style="text-align: center;"><input id="tprice2" type="text"disabled ></td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">3</td>
                                                        <td style="text-align: center;">{{$service[2]->name}}</td>
                                                        <td style="text-align: center;"><input id="q3" onchange="myfunction()" type="text" value="{{ $service[2]->price}}"></td>
                                                        <td style="text-align: center;"><input id="uprice3" type="text" value="{{ $service[2]->price}}"disabled></td>
                                                        <td style="text-align: center;"><input id="tprice3" type="text"disabled ></td>
                                                        
                                                    </tr>
                                
                                                          
                                                </tbody>
                                                <script>
                                                        function myfunction(){
                                                        $up = document.getElementById('uprice1').value; $qty = document.getElementById('q1').value;
                                                        $tp = $up * $qty;
                                                        document.getElementById('tprice1').setAttribute('value',$tp);
                                                        

                                                        $up2 = document.getElementById('uprice2').value; $qty2 = document.getElementById('q2').value;
                                                        $tp2 = $up2 * $qty2;
                                                        document.getElementById('tprice2').setAttribute('value',$tp2);

                                                        $up3 = document.getElementById('uprice3').value; $qty3 = document.getElementById('q3').value;
                                                        $tp3 = $up3 * $qty3;
                                                        document.getElementById('tprice3').setAttribute('value',$tp3);
                                                        }
                                                        
                                                        </script>
                                                        
                                            </table>
                                            <button type="button">submit</button>
                                            <p></p>
                                        </div>
                                    </div><!-- /.sc_table_wrap -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($service as $item)
<label value="{{$item->name}}"></label>@endforeach

    </div>
    @endsection
