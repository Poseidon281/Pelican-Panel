<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'The FQDN or IP address provided does not resolve to a valid IP address.',
        'fqdn_required_for_ssl' => 'A fully qualified domain name that resolves to a public IP address is required in order to use SSL for this node.',
    ],
    'notices' => [
        'allocations_added' => 'Allocations have successfully been added to this node.',
        'node_deleted' => 'Node has been successfully removed from the panel.',
        'node_created' => 'Successfully created new node. You can automatically configure the daemon on this machine by visiting the \'Configuration\' tab. <strong>Before you can add any servers you must first allocate at least one IP address and port.</strong>',
        'node_updated' => 'Node information has been updated. If any daemon settings were changed you will need to reboot it for those changes to take effect.',
        'unallocated_deleted' => '<code>:ip</code> के लिए सभी गैर-आवंटित पोर्ट हटा दिए गए।',
    ],
];
