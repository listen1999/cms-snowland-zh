<?php

namespace Reinos\Webservice\Core\Hook;

/**
 * @author		Rein de Vries <support@reinos.nl>
 * @link		http://addons.reinos.nl
 * @copyright 	Copyright (c) 2011 - 2021 Reinos.nl Internet Media
 * @license     http://addons.reinos.nl/commercial-license
 *
 * Copyright (c) 2011 - 2021 Reinos.nl Internet Media
 * All rights reserved.
 *
 * This source is commercial software. Use of this software requires a
 * site license for each domain it is used on. Use of this software or any
 * of its source code without express written permission in the form of
 * a purchased commercial or other license is prohibited.
 *
 * THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY
 * KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
 * PARTICULAR PURPOSE.
 *
 * As part of the license agreement for this software, all modifications
 * to this source must be submitted to the original author for review and
 * possible inclusion in future releases. No compensation will be provided
 * for patches, although where possible we will attribute each contribution
 * in file revision notes. Submitting such modifications constitutes
 * assignment of copyright to the original author (Rein de Vries and
 * Reinos.nl Internet Media) for such modifications. If you do not wish to assign
 * copyright to the original author, your license to  use and modify this
 * source is null and void. Use of this software constitutes your agreement
 * to this clause.
 */
class WebservicePostEntryRow extends AbstractHook
{
    /**
     * Generate Publisher results
     *
     * @param $entry
     * @param $custom_fields
     * @param $post_data
     * @return mixed
     */
    public function execute($entry, $custom_fields, $post_data)
    {
        if(ee(REINOS_WEBSERVICE_SERVICE_NAME.':Helper')->is_installed('publisher') && isset($post_data['publisher_lang_id']))
        {
            //check the ee()->TMPL object
            if(!isset(ee()->TMPL))
            {
                require_once APPPATH.'libraries/Template.php';
                ee()->set('TMPL', new EE_Template());
                ee()->TMPL->tagparams['publisher_lang_id'] = $post_data['publisher_lang_id'];
                ee()->TMPL->tagparams['publisher_status'] = isset($post_data['publisher_status']) ? $post_data['publisher_status'] : 'open';
            }

            //call translation process of Publisher
            $entryResult = ee('publisher:EntryResult');
            $results = $entryResult->getAll(array($entry->entry_id), array($entry->toArray()));
            $results = $entryResult->addPublisherFieldsToResults($results);

            if(!isset(ee()->TMPL))
            {
                ee()->remove('TMPL');
            }

            foreach($results[0] as $fieldname => $value)
            {
                if($value != '')
                {
                    //custom fields
                    if(preg_match("/field_id_(.*?)/", $fieldname, $match))
                    {
                        $entry->{$fieldname} = $value;
                    }
                    else if(in_array($fieldname, array('title', 'url_title', 'publisher_lang_id', 'publisher_status', 'lang_id')))
                    {
                        $entry->{$fieldname} = $value;
                    }
                }
            }
        }

        return $entry;
    }
}
