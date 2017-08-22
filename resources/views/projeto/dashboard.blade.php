@extends('layouts.app')

@section('content')

<div class="container marketing mt-5">
            
       <div class="row">
            <div class="col-lg-4 ">
                <p>Col Lg 4</p>
                <ul class="" role="tablist">
                      
                     <a class="nav-link active btn btn-primary" data-toggle="tab" href="#info" role="tab">Info</a>
                           
                     <a class="nav-link btn btn-primary" data-toggle="tab" href="#files" role="tab">Arquivos</a>
                            
                     <a class="nav-link btn btn-primary" data-toggle="tab" href="#messages" role="tab">Mensagens</a>
                            
                </ul>
            </div>
            <div class="col-lg-8 pl-4 pr-4">
                <div class="">
                    <!-- Nav tabs -->
                        
                        <!-- Tab panels -->
                        <div class="tab-content">
                            <!--Panel 1-->
                            <div class="tab-pane fade in show active chip p-2" id="info" role="tabpanel">
                                <br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade chip p-2" id="files" role="tabpanel">
                                <br>
                                <h1>Arquivos</h1>
                            </div>
                            <!--/.Panel 2-->
                            <!--Panel 3-->
                            <div class="tab-pane fade chip p-2" id="messages" role="tabpanel">
                                <br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 3-->
                        </div>
                                                    
                                                    
                </div> {{-- Chip --}}
            </div>

       </div>{{--  Fim da Row  --}}
            
</div>

@endsection

