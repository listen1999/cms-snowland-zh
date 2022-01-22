<?php

/**
 * @author		Rein de Vries <support@reinos.nl>
 * @link		https://addons.reinos.nl
 * @copyright 	Copyright (c) 2011 - 2021 Reinos.nl Internet Media
 * @license     https://addons.reinos.nl/commercial-license
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

namespace Reinos\Webservice\Model;

use EllisLab\ExpressionEngine\Service\Model\Gateway;
use EllisLab\ExpressionEngine\Service\Model\MetaDataReader;
use EllisLab\ExpressionEngine\Service\Model\Query\Builder;
use EllisLab\ExpressionEngine\Service\Model\VariableColumnModel;

class PublisherEntryTranslation extends VariableColumnModel {

    const NAME = REINOS_WEBSERVICE_SERVICE_NAME.':PublisherEntryTranslation';

    protected static $_primary_key = 'id';
    protected static $_gateway_names = ['PublisherEntryTranslationTitleGateway', 'PublisherEntryTranslationDataGateway'];

    protected $site_id;
    protected $channel_id;
    protected $author_id;
    protected $entry_id;
    protected $lang_id;
    protected $status;
    protected $title;
    protected $url_title;
    protected $page_url;
    protected $hide_in_nav = null;
    protected $template_id = 0;
    protected $parent_id = 0;
    protected $entry_date;
    protected $edit_date;
    protected $edit_by;

    protected static $_relationships = array(
        'TranslationEntries' => array(
            'type'     => 'belongsTo',
            'model'    => 'ee:ChannelEntry',
            'from_key' => 'entry_id',
            'to_key'   => 'entry_id',
            'weak'     => TRUE,
            'inverse' => array(
                'name' => 'PublisherEntryTranslation',
                'type' => 'hasMany'
            )
        ),
    );

}

// EOF
