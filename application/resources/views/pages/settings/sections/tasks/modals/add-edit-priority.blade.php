<div class="row {{ app()->getLocale() == 'persian_br' ? 'text-right' : 'text-left' }}">
    <div class="col-lg-12">
        <!--title-->
        <div class="form-group row">
            <label
                class="col-12 control-label col-form-label required">{{ cleanLang(__('lang.priority_name')) }}*</label>
            <div class="col-12">
                <input type="text" class="form-control form-control-sm" id="taskpriority_title"
                    name="taskpriority_title" value="{{ $priority->taskpriority_title ?? '' }}">
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group row">
            <div class="col-12">
                <input name="taskpriority_colors" type="radio" id="radio_default" value="default"
                    {{ $page['default_color'] ?? '' }}
                    {{ runtimePreChecked2('default', $priority->taskpriority_color ?? '') }}
                    class="with-gap radio-col-grey taskpriority_colors">
                <label for="radio_default"><span class="bg-default settings-tasks-modal-color-select">&nbsp;</span>
                </label>
            </div>
            <div class="col-12 p-b-5">
                <input name="taskpriority_colors" type="radio" id="radio_info" value="info"
                    {{ runtimePreChecked2('info', $priority->taskpriority_color ?? '') }}
                    class="with-gap radio-col-grey taskpriority_colors">
                <label for="radio_info"><span class="bg-info settings-tasks-modal-color-select">&nbsp;</span>
                </label>
            </div>
            <div class="col-12">
                <input name="taskpriority_colors" type="radio" id="radio_success" value="success"
                    {{ runtimePreChecked2('success', $priority->taskpriority_color ?? '') }}
                    class="with-gap radio-col-grey taskpriority_colors">
                <label for="radio_success"><span class="bg-success settings-tasks-modal-color-select">&nbsp;</span>
                </label>
            </div>
            <div class="col-12">
                <input name="taskpriority_colors" type="radio" id="radio_danger" value="danger"
                    {{ runtimePreChecked2('danger', $priority->taskpriority_color ?? '') }}
                    class="with-gap radio-col-grey taskpriority_colors">
                <label for="radio_danger"><span class="bg-danger settings-tasks-modal-color-select">&nbsp;</span>
                </label>
            </div>
            <div class="col-12">
                <input name="taskpriority_colors" type="radio" id="radio_warning" value="warning"
                    {{ runtimePreChecked2('warning', $priority->taskpriority_color ?? '') }}
                    class="with-gap radio-col-grey taskpriority_colors">
                <label for="radio_warning"><span class="bg-warning settings-tasks-modal-color-select">&nbsp;</span>
                </label>
            </div>
            <div class="col-12">
                <input name="taskpriority_colors" type="radio" id="radio_primary" value="primary"
                    {{ runtimePreChecked2('primary', $priority->taskpriority_color ?? '') }}
                    class="with-gap radio-col-grey taskpriority_colors">
                <label for="radio_primary"><span class="bg-primary settings-tasks-modal-color-select">&nbsp;</span>
                </label>
            </div>
            <div class="col-12">
                <input name="taskpriority_colors" type="radio" id="radio_lime" value="lime"
                    {{ runtimePreChecked2('lime', $priority->taskpriority_color ?? '') }}
                    class="with-gap radio-col-grey taskpriority_colors">
                <label for="radio_lime"><span class="bg-lime settings-tasks-modal-color-select">&nbsp;</span>
                </label>
            </div>
            <div class="col-12">
                <input name="taskpriority_colors" type="radio" id="radio_brown" value="brown"
                    {{ runtimePreChecked2('brown', $priority->taskpriority_color ?? '') }}
                    class="with-gap radio-col-grey taskpriority_colors">
                <label for="radio_brown"><span class="bg-brown settings-tasks-modal-color-select">&nbsp;</span>
                </label>
            </div>

            <!--hidden-->
            <input type="hidden" name="taskpriority_color" id="taskpriority_color" value="">

        </div>
    </div>
</div>