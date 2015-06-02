<?php

namespace Icinga\Module\Director\Objects;

class IcingaHostgroup extends IcingaObject
{
    protected $table = 'icinga_hostgroup';

    protected $defaultProperties = array(
        'id'                    => null,
        'object_name'           => null,
        'display_name'          => null,
        'object_type'           => null,
    );
}
