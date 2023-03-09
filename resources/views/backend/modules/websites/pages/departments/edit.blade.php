@extends('backend.layouts.app')

@section('header')
<link rel="stylesheet" href="{{ dsld_static_asset('backend/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
<style>
    .bootstrap-tagsinput{    border: 1px solid #cbcbcb !important;width: 100%;}
</style>
@endsection

@section('content')
 <!-- Exportable Table -->
 <form id="update_form" action="{{ route('pages.update') }}" method="POST" enctype="multipart/form-data" >
    <div class="row clearfix">
        <div class="col-lg-8">
            @csrf 
            <input type="hidden" name="id" id="id" value="{{ $data->id }}" />
            <input type="hidden" name="type" id="type" value="department_page" />
            <div class="card mb-0">
                <div class="header">
                    <a href="{{ route('custom-pages.show_custom_page', [$data->slug ]) }}" target="_blank">         
                        <h2><strong> <i class="zmdi zmdi-hc-fw"></i> {{ $data->title }}</strong></h2>
                    </a>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label class="form-label">Title <small class="text-danger">*</small></label>  
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8">
                            <div class="form-group">
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title" onchange="is_edited()" value="{{ $data->title }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label class="form-label">Slug <small class="text-danger">*</small><span class="ml-2 pointer-cursor" onclick="$('input[name=slug]').removeAttr('disabled');"><i class="zmdi zmdi-edit"></i></a></label>  
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8">
                            <div class="form-group">
                            <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug" value="{{ $data->slug }}" onchange="is_edited()" disabled/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-0">
                <div class="header">
                    <h2><strong>Content</strong></h2>
                </div>
                <div class="form-group">                                
                    <div class="summernote" id="content" onchange="is_edited()"><?php $str = $data->content; echo htmlspecialchars_decode($str); ?></div>                                   
                </div>
            </div>
            <div class="card mb-0">
                <div class="header">
                    <h2><strong>Setting</strong></h2>                        
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 form-control-label">
                            <label class="form-label"><strong>Page Name </strong></label>  
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8">
                            <div class="form-group">
                                <div class="checkbox">
                                    <input name="setting[]" type="hidden" value="setting_page_name_hide">
                                    <input id="setting_page_name_hide" name="setting_page_name_hide" type="checkbox" value="yes" @if(dsld_page_meta_value_by_meta_key('setting_page_name_hide', $data->id) =='yes') checked @endif>
                                    <label for="setting_page_name_hide">Hide</label>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 form-control-label">
                            <label class="form-label"><strong>Banner/Slider </strong></label>  
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8">
                            <div class="form-group">
                                <input name="setting[]" type="hidden" value="setting_page_banner_slider">
                                <input name="setting_slider" type="hidden" id="setting_slider"  @if(dsld_page_meta_value_by_meta_key('setting_page_banner_slider', $data->id) =='banner') value="banner" @elseif(dsld_page_meta_value_by_meta_key('setting_page_banner_slider', $data->id) =='slider') value="slider" @else value="no" @endif>
                                <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="setting_page_banner_slider" id="setting_page_banner_slider_no" class="with-gap slider_activity" value="no"  @if(dsld_page_meta_value_by_meta_key('setting_page_banner_slider', $data->id) =='no') checked @endif>
                                    <label for="setting_page_banner_slider_no">No Need</label>
                                </div> 
                                <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="setting_page_banner_slider" id="setting_page_banner_slider_banner" class="with-gap slider_activity" value="banner"  @if(dsld_page_meta_value_by_meta_key('setting_page_banner_slider', $data->id) =='banner') checked @endif>
                                    <label for="setting_page_banner_slider_banner">Banner</label>
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-0">
                <div class="header">
                    <h2><strong>Publish</strong></h2>                        
                </div>
                <div class="body">
            
                    <div class="form-group">
                        <label class="form-label">Status *</label>                                 
                        <select class="form-control" name="status" id="status" onchange="is_edited()">
                            <option value="">-- Please select --</option>
                            <option value="1" @if($data->status == 1) selected @endif>Active</option>
                            <option value="0" @if($data->status == 0) selected @endif>Deactive</option>
                        </select>                             
                    </div>
                    <div class="form-group">
                        <label class="form-label">Template *</label>                                 
                        <select class="form-control" name="template" id="template" onchange="is_edited()">
                            <option value="">-- Please select --</option>
                            <option value="default"  @if($data->template == 'default') selected @endif>Default</option>
                            <option value="page_with_sidebar"  @if($data->template == 'page_with_sidebar') selected @endif>Page With Sidebar</option>
                            <option value="school_department"  @if($data->template == 'school_department') selected @endif>Department Details</option>
                        </select>                             
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Parent *</label>                                 
                        <select class="form-control" name="parent" id="parent" onchange="is_edited()">
                            <option value="0">-- Please select --</option>
                            @foreach(App\Models\Page::where('type', 'department_page')->where('status', 1)->whereNotIn('id', [$data->id])->get() as $key => $value)
                                
                                <option value="{{ $value->id }}"  @if($data->parent ==  $value->id) selected @endif>{{ $value->title }}</option>
                                @php
                                    $child = App\Models\Page::where('parent', $value->id)->where('type', 'department_page')->where('level', 2)->where('status', 1)->get();
                                @endphp
                                @if($child != '')
                                    @foreach($child as $key => $value1)
                                        <option value="{{ $value1->id }}"  @if($data->parent ==  $value1->id) selected @endif>- {{ $value1->title }}</option>
                                        @php
                                            $child2 = App\Models\Page::where('parent', $value1->id)->where('type', 'department_page')->where('level', 3)->where('status', 1)->get();
                                        @endphp
                                        @if($child2 != '')
                                            @foreach($child2 as $key => $value2)
                                                <option value="{{ $value2->id }}"  @if($data->parent ==  $value2->id) selected @endif>-- {{ $value2->title }}</option>
                                                @php
                                                    $child3 = App\Models\Page::where('parent', $value2->id)->where('type', 'department_page')->where('level', 4)->where('status', 1)->get();
                                                @endphp
                                                @if($child3 != '')
                                                    @foreach($child3 as $key => $value3)
                                                        <option value="{{ $value3->id }}"  @if($data->parent ==  $value3->id) selected @endif>--- {{ $value3->title }}</option>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif

                            @endforeach
                        </select>                             
                    </div>
                    <div class="form-group">
                        <label class="form-label">Order</label>                                 
                        <input type="text" name="order" id="order" onchange="is_edited()" class="form-control" placeholder="Order" value="{{ $data->order }}" />                                   
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                        </div>
                        <input type="date" name="date" id="date" class="form-control" onchange="is_edited()" value="{{  date('Y-m-d', strtotime($data->created_at)) }}">
                    </div>
                    <div class="swal-button-container">
                        <button type="submit" class="btn btn-success btn-round waves-effect dsld-btn-loader" id="submit_btn" disabled="disabled">Update</button>
                    </div>
                    <a href="{{ route('custom-pages.show_custom_page', [$data->slug ]) }}" traget="_blank"  class="btn btn-success btn-round waves-effect">Preview</a>
                    <button type="button" class="btn btn-danger btn-round waves-effect" onclick="DSLDDeleteAlert('{{ $data->id }}','{{ route('pages.destory') }}','{{ csrf_token() }}')"><i class="zmdi zmdi-delete"></i></button>
                </div>
            </div>
            <div class="card mb-0">
                <div class="header">
                    <h2><strong>Banner</strong></h2>                        
                </div>
                <div class="body">
                    <div class="form-group">
                        <label class="form-label">Banner</label>
                        <select class="form-control show-tick ms select2" name="banner" id="banner" onchange="is_edited()">
                            <option value="">-- Please select --</option>
                            @foreach(App\Models\Upload::where('user_id', Auth::user()->id)->where('type', 'image')->get() as $key => $value)
                                <option value="{{ $value->id }}" @if($data->banner == $value->id) selected @endif>({{ $value->id }}) - {{ $value->file_title}} </option>
                            @endforeach
                        </select>
                        @if($data->banner > 0)
                        <div class="image mt-2">
                            <img src="{{ dsld_uploaded_asset($data->banner) }}"  alt="{{ dsld_upload_file_title($data->banner) }}" class="img-fluid">
                        </div> 
                        @endif  
                                                                                  
                    </div>
                </div>
            </div>
            <div class="card mb-0">
                <div class="header">
                    <h2><strong>SEO</strong></h2>                        
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-control-label">
                            <label class="form-label">Meta Title </label>  
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                            <input type="text" name="meta_title" id="meta_title" class="form-control" placeholder="Meta Title" onchange="is_edited()" value="{{ $data->meta_title }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-control-label">
                            <label class="form-label">Meta Description </label>  
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                            <input type="text" name="meta_description" onchange="is_edited()" id="meta_description" class="form-control" placeholder="Meta Drscription" value="{{ $data->meta_description }}" />                                   
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-control-label">
                            <label class="form-label">Keyword </label>  
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                            <input type="text" class="form-control" onchange="is_edited()" name="keywords" id="keywords" data-role="tagsinput" value="{{ $data->keywords }}">                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</form>
<!-- Exportable Table -->

@if(is_array($section) || count($section) > 0)
<div class="department_fields" style="display:none">
<hr>
<h4>Program Details</h4>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card mb-0">
            <div class="body">
                
                <!-- Nav tabs -->
                <ul class="nav nav-tabs p-0 mb-3 nav-tabs-success" role="tablist">
                    @foreach($section as $key => $sec)
                        <li class="nav-item"><a class="nav-link @if($key == 0 ) active @endif" data-toggle="tab" href="#page_section-{{ $key }}-{{ $sec->id }}"> {{ $sec->title }} </a></li>
                    @endforeach
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content">

                    @foreach($section as $key => $sec)
                    @php
                        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '_', $sec->title));
                        $title_page = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '_', $data->title));
                        $name = strtolower($slug);
                        $page_title = strtolower($title_page);
                        
                    @endphp
                    
                    <div role="tabpanel" class="tab-pane  @if($key == 0 ) in active @endif" id="page_section-{{ $key }}-{{ $sec->id }}">
                        
                        <form id="update_form" action="{{ route('pages_extra_content.update') }}" method="POST" enctype="multipart/form-data" >
                            <input type="hidden" name="page_id" value="{{ $data->id }}" />
                            <input type="hidden" name="page_name" value="{{ $page_title }}" />
                            <input type="hidden" name="section_name" value="{{ $name }}" />
                            <input type="hidden" name="section_id" value="{{ $sec->id }}" />

                            @csrf 
                                @if($sec->meta_fields !="")
                                @foreach (json_decode($sec->meta_fields) as $key2 => $element)
                                    @php 
                                        $page_meta_key = $name."_".$element->type."_".$key2;
                                    @endphp

                                    @if ($element->type == 'text')
                                    
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                                <label class="form-label">{{ ucfirst($element->label) }}</label>  
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8">
                                                <div class="form-group">
                                                    <input type="hidden" name="type[]" value="{{ $page_meta_key }}">
                                                    <input type="text" name="{{ $page_meta_key }}" class="form-control" placeholder="{{ ucfirst($element->label) }}" onchange="is_edited()" value="{{ dsld_page_meta_value_by_meta_key($page_meta_key, $data->id) }}" />
                                                    <small>Meta Key: {{ $page_meta_key }}</small>
                                                </div>
                                            </div>
                                        </div>

                                    @elseif ($element->type == 'image_box')
                                        @php 
                                            $page_meta_key_heading = $name."_".$element->type."_"."heading_".$key2;
                                            $page_meta_key_subheading = $name."_".$element->type."_"."subheading_".$key2;
                                            $page_meta_key_img = $name."_".$element->type."_"."img_".$key2;
                                            $page_meta_key_content = $name."_".$element->type."_"."content_".$key2;
                                            $page_meta_key_btn = $name."_".$element->type."_"."btn_".$key2;
                                            $page_meta_key_link = $name."_".$element->type."_"."link_".$key2;
                                        @endphp
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                                <label class="form-label">{{ ucfirst($element->label) }}</label>  
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="hidden" name="type[]" value="{{ $page_meta_key_heading }}">
                                                            <input type="text" name="{{ $page_meta_key_heading }}" class="form-control" placeholder="Heading" onchange="is_edited()" value="{{ dsld_page_meta_value_by_meta_key($page_meta_key_heading, $data->id) }}" />
                                                            <small>Meta Key: {{ $page_meta_key_heading }}</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="hidden" name="type[]" value="{{ $page_meta_key_subheading }}">
                                                            <input type="text" name="{{ $page_meta_key_subheading }}" class="form-control" placeholder="Sub Heading" onchange="is_edited()" value="{{ dsld_page_meta_value_by_meta_key($page_meta_key_subheading, $data->id) }}" />
                                                            <small>Meta Key: {{ $page_meta_key_subheading }}</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="hidden" name="type[]" value="{{ $page_meta_key_img }}">
                                                            <select class="form-control show-tick ms select2" name="{{ $page_meta_key_img }}" onchange="is_edited()">
                                                                <option value="">-- Please select --</option>
                                                                @foreach(App\Models\Upload::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get() as $key => $value)
                                                                    <option value="{{ $value->id }}" @if(dsld_page_meta_value_by_meta_key($page_meta_key_img, $data->id) == $value->id) selected @endif>({{ $value->id }}) - {{ $value->file_title}} - {{ $value->extension}}</option>
                                                                @endforeach
                                                            </select>
                                                            @if(dsld_page_meta_value_by_meta_key($page_meta_key_img, $data->id) != '')
                                                            <div class="image mt-2">
                                                                <img src="{{ dsld_uploaded_asset(dsld_page_meta_value_by_meta_key($page_meta_key_img, $data->id)) }}"  alt="{{ dsld_upload_file_title(dsld_page_meta_value_by_meta_key($page_meta_key_img, $data->id)) }}" class="img-fluid" width="100">
                                                            </div> 
                                                            @endif 
                                                        </div>
                                                        <small>Meta Key: {{ $page_meta_key_img }}</small>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="hidden" name="type[]" value="{{ $page_meta_key_content }}">
                                                            <textarea name="{{ $page_meta_key_content }}" class="form-control" placeholder="Content" onchange="is_edited()">{{ dsld_page_meta_value_by_meta_key($page_meta_key_content, $data->id) }}</textarea>
                                                            <small>Meta Key: {{ $page_meta_key_content }}</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="hidden" name="type[]" value="{{ $page_meta_key_btn }}">
                                                            <input type="text" name="{{ $page_meta_key_btn }}" class="form-control" placeholder="Button name" onchange="is_edited()" value="{{ dsld_page_meta_value_by_meta_key($page_meta_key_btn, $data->id) }}" />
                                                            <small>Meta Key: {{ $page_meta_key_btn }}</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="hidden" name="type[]" value="{{ $page_meta_key_link }}">
                                                            <input type="text" name="{{ $page_meta_key_link }}" class="form-control" placeholder="Button link" onchange="is_edited()" value="{{ dsld_page_meta_value_by_meta_key($page_meta_key_link, $data->id) }}" />
                                                            <small>Meta Key: {{ $page_meta_key_link }}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif ($element->type == 'image_box_repeter')
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                                <label class="form-label">{{ ucfirst($element->label) }}</label>  
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8">
                                                <div class="form-group">
                                                    <input type="hidden" name="type[]" value="{{ $page_meta_key }}">
                                                    <input type="text" name="{{ $page_meta_key }}" class="form-control" placeholder="{{ ucfirst($element->label) }}" onchange="is_edited()" value="{{ dsld_page_meta_value_by_meta_key($page_meta_key, $data->id) }}" />
                                                    <small>Meta Key: {{ $page_meta_key }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif ($element->type == 'text_repeter')

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                                <label class="form-label">{{ ucfirst($element->label) }}</label>  
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8">
                                                <div class="text_repeter{{ $sec->id }}_{{ $key2 }}">
                                                    <input type="hidden" name="type[]" value="{{ $page_meta_key }}">
                                                    
                                                    @if(dsld_page_meta_value_by_meta_key($page_meta_key, $data->id) != '')
                                                        @foreach(@json_decode(dsld_page_meta_value_by_meta_key($page_meta_key, $data->id), true) as $key3 => $value) 
                                                            
                                                            <div class="row clearfix">
                                                                <div class="col-sm-10">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"  name="{{ $page_meta_key }}[]" placeholder="{{ ucfirst($element->label) }}" value="{{ $value }}">  
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="remove-parent" data-parent=".row">
                                                                        <i class="zmdi zmdi-hc-fw"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <small>Meta Key: {{ $page_meta_key }}</small>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4">
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-10">
                                                <div class="input-group mb-4">
                                                    <button
                                                        type="button"
                                                        class="btn btn-primary addMoreBtn"
                                                        data-toggle="add-more"
                                                        data-content='<div class="row clearfix">
                                                            <div class="col-sm-10">
                                                                <div class="form-group"><input type="text" class="form-control"  name="{{ $page_meta_key }}[]" placeholder="{{ ucfirst($element->label) }}">  
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-sm btn-danger" data-toggle="remove-parent" data-parent=".row">
                                                                    <i class="zmdi zmdi-hc-fw"></i>
                                                                </button>
                                                            </div>
                                                        </div>'
                                                        data-target=".text_repeter{{ $sec->id }}_{{ $key2 }}">
                                                        <i class="zmdi zmdi-hc-fw"></i>
                                                    </button>
                                                </div><small>Meta Key: {{ $page_meta_key }}</small>
                                            </div>
                                        </div>
                                    
                                    @elseif ($element->type == 'file_repeter')

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                                <label class="form-label">{{ ucfirst($element->label) }}</label>  
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8">
                                                <div class="file_repeter{{ $sec->id }}_{{ $key2 }}">
                                                    <div class="form-group">
                                                        <input type="hidden" name="type[]" value="{{ $page_meta_key }}">
                                                        <select class="form-control show-tick ms select2" name="{{ $page_meta_key }}[]" multiple>
                                                            <option value="">-- Please select --</option>
                                                            @foreach(App\Models\Upload::where('user_id', Auth::user()->id)->orderBy('id', 'Desc')->get() as $key => $value)
                                                                <option value="{{ $value->id }}" @if(dsld_page_meta_value_by_meta_key($page_meta_key, $data->id) != 'Null') @if(is_array(json_decode(dsld_page_meta_value_by_meta_key($page_meta_key, $data->id), true)))@if(in_array($value->id, json_decode(dsld_page_meta_value_by_meta_key($page_meta_key, $data->id), true))) selected @endif @endif @endif>({{ $value->id }}) - {{ $value->file_title}} - {{ $value->extension}} </option>
                                                            @endforeach
                                                        </select>
                                                        
                                                        @if(is_array(json_decode(dsld_page_meta_value_by_meta_key($page_meta_key, $data->id), true)) && count(json_decode(dsld_page_meta_value_by_meta_key($page_meta_key, $data->id), true)) > 0)
                                                        <div class="image mt-2">
                                                            @foreach(json_decode(dsld_page_meta_value_by_meta_key($page_meta_key, $data->id), true) as $key => $value)
                                                                <img src="{{ dsld_uploaded_asset($value) }}"  alt="{{ dsld_upload_file_title($value) }}" class="img-fluid mr-2" width="100">
                                                            @endforeach
                                                            </div> 
                                                        @endif 
                                                    </div>
                                                </div><small>Meta Key: {{ $page_meta_key }}</small>
                                                
                                            </div>
                                        </div>
                                    @elseif ($element->type == 'multi_select')

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                                <label class="form-label">{{ ucfirst($element->label) }}</label>  
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8">
                                                <div class="file_repeter{{ $sec->id }}_{{ $key2 }}">
                                                    <div class="form-group">
                                                        <input type="hidden" name="type[]" value="{{ $page_meta_key }}">
                                                        <select class="form-control show-tick ms select2" name="{{ $page_meta_key }}[]"  multiple>
                                                            <option value="">-- Please select --</option>
                                                            @if (is_array(json_decode($element->options)))
                                                                @foreach (json_decode($element->options) as $value)
                                                                    <option value="{{ $value }}" @if(dsld_page_meta_value_by_meta_key($page_meta_key, $data->id) != '')  @if(in_array($value, json_decode(dsld_page_meta_value_by_meta_key($page_meta_key, $data->id), true))) selected @endif @endif>{{ $value }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        
                                                    </div>
                                                </div><small>Meta Key: {{ $page_meta_key }}</small>
                                                
                                            </div>
                                        </div>
                                    @elseif ($element->type == 'select' || $element->type == 'radio')

                                        <div class="row clearfix mb-2">
                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                                <label class="form-label">{{ ucfirst(str_replace('_', ' ', $element->type)) }}</label>  
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8">
                                                <div class="form-group">
                                                    <input type="hidden" name="type[]" value="{{ $page_meta_key }}">
                                                    <select class="form-control" name="{{ $page_meta_key }}">
                                                        <option value="">-- Please select --</option>
                                                        @if (is_array(json_decode($element->options)))
                                                            @foreach (json_decode($element->options) as $value)
                                                                <option value="{{ $value }}" @if($value == dsld_page_meta_value_by_meta_key($page_meta_key, $data->id)) selected @endif>{{ $value }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div><small>Meta Key: {{ $page_meta_key }}</small>
                                            </div>
                                        </div>

                                    @elseif ($element->type == 'file')

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                                <label class="form-label">{{ ucfirst($element->label) }}</label>  
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8">
                                                <div class="form-group">
                                                    <input type="hidden" name="type[]" value="{{ $page_meta_key }}">
                                                    <select class="form-control show-tick ms select2" name="{{ $page_meta_key }}" onchange="is_edited()">
                                                        <option value="">-- Please select --</option>
                                                        @foreach(App\Models\Upload::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get() as $key => $value)
                                                            <option value="{{ $value->id }}" @if(dsld_page_meta_value_by_meta_key($page_meta_key, $data->id) == $value->id) selected @endif>({{ $value->id }}) - {{ $value->file_title}} - {{ $value->extension}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if(dsld_page_meta_value_by_meta_key($page_meta_key, $data->id) != '')
                                                    <div class="image mt-2">
                                                        <img src="{{ dsld_uploaded_asset(dsld_page_meta_value_by_meta_key($page_meta_key, $data->id)) }}"  alt="{{ dsld_upload_file_title(dsld_page_meta_value_by_meta_key($page_meta_key, $data->id)) }}" class="img-fluid" width="100">
                                                    </div> 
                                                    @endif 
                                                </div><small>Meta Key: {{ $page_meta_key }}</small>
                                            </div>
                                        </div>

                                    @elseif ($element->type == 'button')

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                                <label class="form-label">{{ ucfirst($element->label) }}</label>  
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8">
                                                <div class="form-group">
                                                    <input type="hidden" name="type[]" value="{{ $page_meta_key }}">
                                                    <input type="text" name="{{ $page_meta_key }}" class="form-control" placeholder="Url" onchange="is_edited()" value="{{ dsld_page_meta_value_by_meta_key($page_meta_key, $data->id) }}" />
                                                </div><small>Meta Key: {{ $page_meta_key }}</small>
                                            </div>
                                        </div>

                                    @elseif ($element->type == 'editor')

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                                <label class="form-label">{{ ucfirst($element->label) }}</label>  
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8">
                                                <div class="form-group">
                                                    <input type="hidden" name="type[]" value="{{ $page_meta_key }}">
                                                    <textarea  class="summernote" name="{{ $page_meta_key }}"><?php $str = dsld_page_meta_value_by_meta_key($page_meta_key, $data->id); echo htmlspecialchars_decode($str); ?></textarea >  
                                                </div><small>Meta Key: {{ $page_meta_key }}</small>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                @endif
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-control-label">
                                        <div class="swal-button-container">
                                            <button type="submit" class="btn btn-success btn-round waves-effect dsld-btn-loader" id="submit_btn">Update</button>
                                        </div>
                                    </div>
                                </div>

                        </form>
                    </div>
                    @endforeach

                </div>

                
            </div>
        </div>
        
    </div>
</div>
<div>
@endif
@endsection

@section('footer')



<script src="{{ dsld_static_asset('backend/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<script>
    
    $(document).ready(function(){
        if ($('#template').val() == 'school_department') { 
            $('.department_fields').show();
        }else{
            $('.department_fields').hide();   
        }

        $(".summernote").summernote('code');
        $('#update_form').on('submit', function(event){
        event.preventDefault();
        
            var setting_page_name_hide = 'no';
            
            if ($('#setting_page_name_hide').is(":checked")) { 
                if($('#setting_page_name_hide').val() == 'yes'){
                    setting_page_name_hide = 'yes';
                }
            }
            $('input[name=slug]').removeAttr('disabled');
            $('.dsld-btn-loader').addClass('btnloading');
            var Loader = ".btnloading";
            DSLDButtonLoader(Loader, "start");
            var content =  $("#content").summernote('code');
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                cache : false,
                data: $(this).serialize(),
                success: function(data) {
                    DSLDButtonLoader(Loader, "");
                    dsldFlashNotification(data['status'], data['message']);
                    if(data['status'] =='success'){
                        $('input[name=slug]').attr('disabled', true);
                        //location.reload();
                    }
                    
                }
            });
        });
    });
    function is_edited(){
        $('#submit_btn').removeAttr('disabled');
    }
    function get_pages(){
        window.location.href = "{{ route('pages.index') }}";
    }
    $('#template').on('change', function(){
        if ($(this).val() == 'school_department') { 
            $('.department_fields').show();
        }else{
            $('.department_fields').hide();   
        }
   });
</script>
@endsection