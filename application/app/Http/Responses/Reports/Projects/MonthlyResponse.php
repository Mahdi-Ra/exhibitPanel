<?php

/** --------------------------------------------------------------------------------
 * This classes renders the response for the [store] process for the fooo
 * controller
 * @package    Grow CRM
 * @author     NextLoop
 *----------------------------------------------------------------------------------*/

namespace App\Http\Responses\Reports\Projects;
use Illuminate\Contracts\Support\Responsable;

class MonthlyResponse implements Responsable {

    private $payload;

    public function __construct($payload = array()) {
        $this->payload = $payload;
    }

    /**
     * render the view for fooo members
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function toResponse($request) {

        //set all data to arrays
        foreach ($this->payload as $key => $value) {
            $$key = $value;
        }

        if (request('action') == 'load' || request('action') == 'sort') {

            if (request('action') == 'load') {
                $html = view('pages/reports/projects/month/table', compact('projects', 'totals', 'years'))->render();
                $jsondata['dom_html'][] = [
                    'selector' => '#report-results-container',
                    'action' => 'replace-with',
                    'value' => $html,
                ];
            }

            if (request('action') == 'sort') {
                $html = view('pages/reports/projects/month/ajax', compact('projects', 'totals', 'years'))->render();
                $jsondata['dom_html'][] = [
                    'selector' => '#report-results-ajax-container',
                    'action' => 'replace',
                    'value' => $html,
                ];
            }

            //skip don update
            $jsondata['skip_dom_reset'] = true;

        } else {
            $html = view('pages/reports/projects/month/wrapper', compact('projects', 'totals', 'years'))->render();
            $jsondata['dom_html'][] = [
                'selector' => '#embed-content-container',
                'action' => 'replace',
                'value' => $html,
            ];
        }

        //flip sorting url for this particular link - only is we clicked sort menu links
        if (request('action') == 'sort') {
            $sort_url = flipSortingUrl(request()->fullUrl(), request('sortorder'));
            $element_id = '#sort_' . request('orderby');
            $jsondata['dom_attributes'][] = array(
                'selector' => $element_id,
                'attr' => 'data-url',
                'value' => $sort_url);
        }

        //crummbs
        $jsondata['dom_classes'][] = [
            'selector' => '.reports-breadcrumbs',
            'action' => 'remove',
            'value' => 'active',
        ];
        $jsondata['dom_classes'][] = [
            'selector' => '.reports-breadcrumbs',
            'action' => 'remove',
            'value' => 'hidden',
        ];
        $jsondata['dom_html'][] = [
            'selector' => '#reports-breadcrumbs-heading',
            'action' => 'replace',
            'value' => $page['breadcrumbs-heading'],
        ];
        $jsondata['dom_html'][] = [
            'selector' => '#reports-breadcrumbs-sub-heading',
            'action' => 'replace',
            'value' => $page['breadcrumbs-sub-heading'],
        ];
        $jsondata['dom_classes'][] = [
            'selector' => '#reports-breadcrumbs-sub-heading',
            'action' => 'add',
            'value' => 'active',
        ];

        //actions panel
        $html = view('pages/reports/projects/components/actions', compact('page'))->render();
        $jsondata['dom_html'][] = [
            'selector' => '#list-page-actions',
            'action' => 'replace',
            'value' => $html,
        ];

        //ajax response
        return response()->json($jsondata);
    }

}
