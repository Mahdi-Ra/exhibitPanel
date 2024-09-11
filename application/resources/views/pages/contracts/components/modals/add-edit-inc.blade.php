<!--customer type selector-->
@if(config('modal.action') == 'create')
<div class="modal-selector">


    <!--preset client-->
    @if(config('modal.type') == 'preset-client')
    <div class="client-selector-container" id="client-existing-container">
        <!--clients projects-->
        <div class="form-group row">
            <label class="col-sm-12 col-lg-3 text-left control-label col-form-label">@lang('lang.project')</label>
            <div class="col-sm-12 col-lg-9">
                <select class="select2-basic form-control form-control-sm select2-preselected" id="doc_project_id"
                    name="doc_project_id" data-allow-clear="true">
                    <option></option>
                    @foreach(config('client.projects') as $project)
                    <option value="{{ $project->project_id }}">{{ $project->project_title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!--client id-->
        <input type="hidden" name="doc_client_id" value="{{ config('client.id') }}">
    </div>
    @else

    <!--select client-->
    <div class="client-selector-container" id="client-existing-container">
        <div class="form-group row">
            <label
                class="col-sm-12 col-lg-3 {{ app()->getLocale() == 'persian_br' ? 'text-right' : 'text-left' }} control-label col-form-label  required">{{ cleanLang(__('lang.client')) }}*</label>
            <div class="col-sm-12 col-lg-9">
                <!--select2 basic search-->
                <select name="doc_client_id" id="doc_client_id"
                    class="clients_and_projects_toggle form-control form-control-sm js-select2-basic-search-modal select2-hidden-accessible"
                    data-projects-dropdown="doc_project_id" data-feed-request-type="clients_projects"
                    data-ajax--url="{{ url('/') }}/feed/company_names">
                    <option></option>
                </select>
            </div>
        </div>
        <!--projects-->
        <div class="form-group row">
            <label
                class="col-sm-12 col-lg-3 {{ app()->getLocale() == 'persian_br' ? 'text-right' : 'text-left' }} control-label col-form-label">{{ cleanLang(__('lang.project')) }}</label>
            <div class="col-sm-12 col-lg-9">
                <select class="select2-basic form-control form-control-sm dynamic_doc_project_id"
                    data-allow-clear="true" id="doc_project_id" name="doc_project_id" disabled>
                </select>
            </div>
        </div>
    </div>

    @endif


</div>
@endif

<!--template-->
<div class="form-group row">
    <label class="col-sm-12 col-lg-3 {{ app()->getLocale() == 'persian_br' ? 'text-right' : 'text-left' }} control-label col-form-label required">@lang('lang.template')</label>
    <div class="col-sm-12 col-lg-9">
        <select class="select2-basic form-control form-control-sm" id="contract_template" name="contract_template">
            <option value="blank">@lang('lang.none_blank')</option>
            @foreach($templates as $template)
            <option value="{{ $template->contract_template_id }}">{{ $template->contract_template_title }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="line"></div>

<!--contract_title-->
<div class="form-group row">
    <label
        class="col-sm-12 col-lg-3 {{ app()->getLocale() == 'persian_br' ? 'text-right' : 'text-left' }} control-label col-form-label required">@lang('lang.contract_title')</label>
    <div class="col-sm-12 col-lg-9">
        <input type="text" class="form-control form-control-sm" id="doc_title" name="doc_title"
            value="{{ $contract->doc_title ?? '' }}">
    </div>
</div>

<!--contract_start_date-->
<div class="form-group row">
    <label class="col-sm-12 col-lg-3 {{ app()->getLocale() == 'persian_br' ? 'text-right' : 'text-left' }} control-label col-form-label required">@lang('lang.start_date')</label>
    <div class="col-sm-12 col-lg-9">
        <input type="text" class="form-control form-control-sm pickadate" autocomplete="off" name="doc_date_start"
            value="{{ runtimeDatepickerDate($contract->doc_date_start ?? '') }}">
        <input class="mysql-date" type="hidden" name="doc_date_start" id="doc_date_start"
            value="{{ $contract->doc_date_start ?? '' }}">
    </div>
</div>

<!--contract_end_date-->
<div class="form-group row">
    <label class="col-sm-12 col-lg-3 {{ app()->getLocale() == 'persian_br' ? 'text-right' : 'text-left' }} control-label col-form-label">@lang('lang.end_date')</label>
    <div class="col-sm-12 col-lg-9">
        <input type="text" class="form-control form-control-sm pickadate" autocomplete="off" name="doc_date_end"
            value="{{ runtimeDatepickerDate($contract->doc_date_end ?? '') }}">
        <input class="mysql-date" type="hidden" name="doc_date_end" id="doc_date_end"
            value="{{ $contract->doc_date_end ?? '' }}">
    </div>
</div>

<!--doc_value-->
<div class="form-group row">
    <label class="col-sm-12 col-lg-3 {{ app()->getLocale() == 'persian_br' ? 'text-right' : 'text-left' }} control-label col-form-label">@lang('lang.value')</label>
    <div class="col-sm-12 col-lg-9">
        <input type="number" class="form-control form-control-sm" id="doc_value" name="doc_value"
            value="{{ $contract->doc_value ?? '' }}">
    </div>
</div>


<!--category-->
<div class="form-group row">
    <label
        class="col-sm-12 col-lg-3 {{ app()->getLocale() == 'persian_br' ? 'text-right' : 'text-left' }} control-label col-form-label  required">{{ cleanLang(__('lang.category')) }}*</label>
    <div class="col-sm-12 col-lg-9">
        <select class="select2-basic form-control form-control-sm" id="doc_categoryid" name="doc_categoryid">
            @foreach($categories as $category)
            <option value="{{ $category->category_id }}"
                {{ runtimePreselected($contract->doc_categoryid ?? '', $category->category_id) }}>{{
                        runtimeLang($category->category_name) }}</option>
            @endforeach
        </select>
    </div>
</div>


<div class="line m-t-40"></div>

<!--redirect to project-->
<div class="form-group form-group-checkbox row">
    <div class="col-12 {{ app()->getLocale() == 'persian_br' ? 'text-right' : 'text-left' }} p-t-5">
        <input type="checkbox" id="show_after_adding" name="show_after_adding" class="filled-in chk-col-light-blue"
            checked="checked">
        <label for="show_after_adding">{{ cleanLang(__('lang.show_contract_after_its_created')) }}</label>
    </div>
</div>