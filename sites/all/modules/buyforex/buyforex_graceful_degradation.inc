
<?php

function buyforex_add_more($form, &$form_state, $no_js_use = FALSE)
{
    // Because we have many fields with the same values, we have to set
    // #tree to be able to access them.

    $form['#tree'] = TRUE;
    $form['names_fieldset'] = array(
        '#type' => 'fieldset',
        '#title' => t('Buy Foreign Exchange') ,
        '#prefix' => '<div id="names-fieldset-wrapper">',
        '#suffix' => '</div>',
    );

    $form['names_fieldset']['purpose'] = array(
        '#type' => 'select',
        '#title' => t('Purpose of travel') ,
        '#required' => TRUE,
        '#options' => array(
            'Leisure',
            'Bussiness',
            'Person'
        ) ,
        '#default_value' => 'Leisure',
    );

    $form['names_fieldset']['info-purpose'] = array(
        '#type' => 'markup',
        '#markup' => '<div class="discriptive-text"><a class="purpose" title="The purpose of Travel you select defines the total amount of Foreign Exchange you can carry. For Personal /Leisure Travel the limit is USD 10000 in a year or equivalent and for Business Trip the limit is USD 25000 or equivalent in a year.">?</a></div>',
    );
    $form['names_fieldset']['no'] = array(
        '#type' => 'select',
        '#title' => t('No. of Travellers') ,
        '#options' => array('1','2','3','4','5') ,
        '#default_value' => '0',
        '#required' => TRUE,
    );
    $form['names_fieldset']['date'] = array(
        '#type' => 'date_popup',
        '#title' => t('Date of travel') ,
        '#default_value' => 'now',
        '#date_format' => 'd-m-Y',
        '#date_increment' => 15,
        '#date_year_range' => '0:+2',
        '#required' => TRUE,
    );

    $form['names_fieldset']['info-dot'] = array(
        '#type' => 'markup',
        '#markup' => '<a class="purpose" title="As per RBI rules, your date of travel should be within the next 60 days for buying Foreign Exchange today. If the date of travel is different for the passengers, you can edit the same for each traveller before making the payment.">?</a>',
    );

    // Build the fieldset with the proper number of names. We'll use
    // $form_state['num_names'] to determine the number of textfields to build.

    if (empty($form_state['num_names']))
    {
        $form_state['num_names'] = 2;
    }

    //IMPLEMENTS LOGIC FOR AJAX CALLBACK

    for ($i = 1; $i < $form_state['num_names']; $i++)
    {
        $form['names_fieldset'][$i] = array(
            '#type' => 'fieldset',
            '#title' => t('Traveler ' . $i . ' Details') ,
            '#prefix' => '<div id="names-fieldset-wrapper">',
            '#suffix' => '</div>',
            '#required' => TRUE,
        );
        $form['names_fieldset'][$i]['product'][$i] = array(
            '#type' => 'select',
            '#title' => t('Product') ,
            '#options' => array(
                'Borderless Prepaid Card',
                'Cash',
                'Travellers Cheque'
            ) ,
            '#required' => TRUE,
            '#default_value' => 'Borderless Prepaid Card',
        );
        $form['names_fieldset'][$i]['info-dot'] = array(
            '#type' => 'markup',
            '#markup' => '<a class="purpose" title="As per RBI rules, your date of travel should be within the next 60 days for buying Foreign Exchange today. If the date of travel is different for the passengers, you can edit the same for each traveller before making the payment.">?</a>',
        );
        $taxonomy = taxonomy_get_tree(2);
        $live_currency = array();
        foreach($taxonomy as $term):
            $tax_obj = taxonomy_term_load($term->tid);
            $live_currency[$term->name] = $tax_obj->field_value['und'][0]['value'];
        endforeach;
        $GLOBALS['live_currency'] = $live_currency;
        $form['names_fieldset'][$i]['currency'][$i] = array(
            '#type' => 'select',
            '#title' => t('Currency') ,
            '#options' => array(
                $live_currency['USD'] => 'USD',
                $live_currency['GBP'] => 'GBP',
                $live_currency['AUD'] => 'AUD',
                $live_currency['EUR'] => 'EUR',
                $live_currency['CAD'] => 'CAD',
                $live_currency['SGD'] => 'SGD'
            ) ,
            '#required' => TRUE,
            '#default_value' => 'USD',
        );
        $form['names_fieldset'][$i]['amount'][$i] = array(
            '#type' => 'textfield',
            '#title' => t('Forex amount') ,
            '#required' => TRUE,

        );
        $form['names_fieldset'][$i]['info-dot2'] = array(
            '#type' => 'markup',
            '#markup' => '<a class="purpose" title="Borderless Prepaid Multicurrency Travel cards from Thomas Cook India are a secure, convenient and easy way to carry money and make payments whenever you travel abroad. Borderless Prepaid Card allows you to load 8 currencies simultaneously and the balance of amount in any currency can be converted into another currency as and when required Currency Cash is available in 26 leading currencies of the world at Thomas Cook India. Foreign Currency Travellers Cheques are convenient and easy to use while traveling abroad and allows you the convenience of cash as well as purchases">?</a>',
        );
    }

    if ($i != 6):
        $form['names_fieldset']['add_name'] = array(
            '#type' => 'submit',
            '#value' => t('+ Add another traveller') ,
            '#submit' => array(
                'ajax_example_add_more_add_one'
            ) ,

            // See the examples in ajax_example.module for more details on the
            // properties of #ajax.

            '#ajax' => array(
                'callback' => 'ajax_example_add_more_callback',
                'wrapper' => 'names-fieldset-wrapper',
            ) ,
        );
    endif;
    if ($form_state['num_names'] > 1 && $i > 2)
    {
        $form['names_fieldset']['remove_name'] = array(
            '#type' => 'submit',
            '#value' => t('- Remove traveller') ,
            '#submit' => array(
                'ajax_example_add_more_remove_one'
            ) ,
            '#ajax' => array(
                'callback' => 'ajax_example_add_more_callback',
                'wrapper' => 'names-fieldset-wrapper',
            ) ,
        );
    }
    $form['names_fieldset']['phno'] = array(
        '#type' => 'textfield',
        '#title' => t('Mobile No'),
        '#required' => TRUE,
    );
    $form['names_fieldset']['email'] = array(
        '#type' => 'textfield',
        '#title' => t('Email'),
        '#required' => TRUE,
    );
    $form['names_fieldset']['privacy_policy'] = array(
        '#type' => 'checkbox',
        '#title' => t('I accept the Privacy Policy'),
        '#required' => TRUE,
    );

    $form['calculate'] = array(
        '#type' => 'submit',
        '#submit' => array(
            'buyforex_calculate'
        ) ,
        '#value' => t('Calculate') ,
    );
    $form['submit'] = array(
        '#type' => 'submit',
        '#submit' => array(
            'buyforex_sumbit'
        ) ,
        '#value' => t('Buyforex') ,

    );
    $form['#validate'][] = 'buyforex_form_validate';
    if ($no_js_use)
    {

        // Remove the #ajax from the above, so ajax.js won't be loaded.

        if (!empty($form['names_fieldset']['remove_name']['#ajax']))
        {
            unset($form['names_fieldset']['remove_name']['#ajax']);
        }

        unset($form['names_fieldset']['add_name']['#ajax']);
    }

    return $form;
}
function buyforex_form_validate($form, &$form_state){
    $form_state['values']['names_fieldset']['purpose'] = 0;
    return $form;
}
function buyforex_sumbit($form, &$form_state)
{
    global $user;
    if($user->uid == 0){
        $order = commerce_cart_order_new($uid = 0, $type = 'commerce_order');
    }else{
        $order = commerce_order_new($user->uid, $type = 'commerce_order');
    }

    $product = commerce_product_load(1);
    $line_item = commerce_product_line_item_new($product, 1, $order->order_id);
    $total_traveller1 = $form_state['input']['names_fieldset'][1]['currency'][1] * $form_state['input']['names_fieldset'][1]['amount'][1];
    $total_traveller2 = $form_state['input']['names_fieldset'][2]['currency'][2] * $form_state['input']['names_fieldset'][2]['amount'][2];
    $total_traveller3 = $form_state['input']['names_fieldset'][3]['currency'][3] * $form_state['input']['names_fieldset'][3]['amount'][3];
    $total_traveller4 = $form_state['input']['names_fieldset'][4]['currency'][4] * $form_state['input']['names_fieldset'][4]['amount'][4];
    $total_traveller5 = $form_state['input']['names_fieldset'][5]['currency'][5] * $form_state['input']['names_fieldset'][5]['amount'][5];
    $total_amount = $total_traveller1 + $total_traveller2 + $total_traveller3 + $total_traveller4 + $total_traveller5 *  100;
    $product->commerce_price['und'][0]['amount'] = round($total_amount);
    $product->commerce_price['und'][0]['currency_code'] = 'INR';
    commerce_product_save($product);
    commerce_line_item_save($line_item);
    $order_wrapper = entity_metadata_wrapper('commerce_order', $order);
    $order_wrapper->commerce_line_items[] = $line_item;
    commerce_order_calculate_total($order);
    commerce_order_save($order);
    drupal_goto('checkout/' . $order->order_id);



}
function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}

function buyforex_calculate($form, &$form_state)
{
    $taxonomy = taxonomy_get_tree(2);
    $live_currency = array();
    foreach($taxonomy as $term):
        $tax_obj = taxonomy_term_load($term->tid);
        if($term->name == "USD"):
            $tax_obj = taxonomy_term_load($term->tid);
        endif;
    endforeach;

    $total_traveller1 = $form_state['input']['names_fieldset'][1]['currency'][1] * $form_state['input']['names_fieldset'][1]['amount'][1];
    $total_traveller2 = $form_state['input']['names_fieldset'][2]['currency'][2] * $form_state['input']['names_fieldset'][2]['amount'][2];
    $total_traveller3 = $form_state['input']['names_fieldset'][3]['currency'][3] * $form_state['input']['names_fieldset'][3]['amount'][3];
    $total_traveller4 = $form_state['input']['names_fieldset'][4]['currency'][4] * $form_state['input']['names_fieldset'][4]['amount'][4];
    $total_traveller5 = $form_state['input']['names_fieldset'][5]['currency'][5] * $form_state['input']['names_fieldset'][5]['amount'][5];
    $total_amount = $total_traveller1 + $total_traveller2 + $total_traveller3 + $total_traveller4 + $total_traveller5;
    dpm("Your order total is Rs. ".round($total_amount));

}

/**
 * Callback for both ajax-enabled buttons.
 *
 * Selects and returns the fieldset with the names in it.
 */

function ajax_example_add_more_callback($form, $form_state)
{
    return $form['names_fieldset'];
}

/**
 * Submit handler for the "add-one-more" button.
 *
 * Increments the max counter and causes a rebuild.
 */

function ajax_example_add_more_add_one($form, &$form_state)
{
    $form_state['num_names']++;
    $form_state['rebuild'] = TRUE;
}

/**
 * Submit handler for the "remove one" button.
 *
 * Decrements the max counter and causes a form rebuild.
 */

function ajax_example_add_more_remove_one($form, &$form_state)
{
    if ($form_state['num_names'] > 1)
    {
        $form_state['num_names']--;
    }

    $form_state['rebuild'] = TRUE;
}

/**
 * Final submit handler.
 *
 * Reports what values were finally set.
 */

function ajax_example_add_more_submit($form, &$form_state)
{
    $output = t('These people are coming to the picnic: @names', array(
        '@names' => implode(', ', $form_state['values']['names_fieldset']['name']) ,
    ));
    drupal_set_message($output);
}

/**
 * @} End of "defgroup ajax_degradation_example".
 */


