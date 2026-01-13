<?php

// Register ACF Fields for Contact Info
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_contact_info',
        'title' => 'Contact Information',
        'fields' => array(
            array(
                'key' => 'field_contact_info_repeater',
                'label' => 'Contact Info',
                'name' => 'contact_info',
                'type' => 'repeater',
                'instructions' => 'Add contact information items',
                'required' => 0,
                'layout' => 'block',
                'button_label' => 'Add Contact Item',
                'sub_fields' => array(
                    array(
                        'key' => 'field_contact_content',
                        'label' => 'Content',
                        'name' => 'content',
                        'type' => 'wysiwyg',
                        'required' => 0,
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 0,
                        'delay' => 0,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options',
                ),
            ),
        ),
    ));
}
