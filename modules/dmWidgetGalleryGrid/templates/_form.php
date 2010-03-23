<?php

echo

$form->renderGlobalErrors(),

_open('div.dm_tabbed_form'),

_tag('ul.tabs',
  _tag('li', _link('#'.$baseTabId.'_medias')->text(__('Medias'))).
  _tag('li', _link('#'.$baseTabId.'_thumbnails')->text(__('Thumbnails'))).
  _tag('li', _link('#'.$baseTabId.'_effects')->text(__('Effects'))).
  _tag('li', _link('#'.$baseTabId.'_advanced')->text(__('Advanced')))
),

_tag('div#'.$baseTabId.'_medias.drop_zone',
  _tag('ol.medias_list', array('json' => array(
    'medias' => $medias,
    'delete_message' => __('Remove this media')
  )), '').
  _tag('div.dm_help.no_margin', __('Drag & drop images here from the right MEDIA panel'))
),

_tag('div#'.$baseTabId.'_thumbnails',
  _tag('ul',
    _tag('li.dm_form_element.multi_inputs.thumbnail.clearfix',
      $form['width']->renderError().
      $form['height']->renderError().
      _tag('label', __('Dimensions')).
      $form['width']->render().
      'x'.
      $form['height']->render().
      $form['method']->label(null, array('class' => 'ml10 mr10 fnone'))->field('.dm_media_method')->error()
    ).
    _tag('li.dm_form_element.multi_inputs.thumbnail.clearfix',
      $form['width']->renderError().
      $form['height']->renderError().
      _tag('label', __('Grid')).
      $form['cols']->render().
      'x'.
      $form['rows']->render().
      $form['margin']->label(null, array('class' => 'ml10 mr10 fnone'))->field('.dm_media_margin')->error()
    ).
    _tag('li.dm_form_element.multi_inputs.thumbnail.clearfix',
      $form['big_width']->renderError().
      $form['big_height']->renderError().
      _tag('label', __('Zoomed size')).
      $form['big_width']->render().
      'x'.
      $form['big_height']->render()
    ).
    _tag('li.dm_form_element.multi_inputs.background.clearfix.none',
      $form['width']->renderError()
    ).
    _tag('li.dm_form_element.quality.clearfix',
      $form['quality']->label(__('JPG quality'))->field()->error().
      _tag('p.dm_help', __('Leave empty to use default quality'))
    )
  ).
  _tag('div.dm_help.no_margin', '<hr />'.__('These settings will apply on all images'))
),

_tag('div#'.$baseTabId.'_effects',
  _tag('ul',
    _tag('li.dm_form_element.transition.clearfix',
      $form['transition']->label(__('Transition'))->field()->error()
    ).
    _tag('li.dm_form_element.speed.clearfix',
      $form['speed']->label(__('Speed'))->field()->error().
      _tag('p.dm_help', __('The Colorbox speed setting')).
      _tag('p.dm_help', __('Leave empty to use default colorbox speed 350'))
    ).
    _tag('li.dm_form_element.opacity.clearfix',
      $form['opacity']->label(__('Opacity'))->field()->error().
      _tag('p.dm_help', __('The Colorbox opacity setting')).
      _tag('p.dm_help', __('Leave empty to use default opacity 0.85'))
    ).
    _tag('li.dm_form_element.config.clearfix',
      $form['config']->label(__('Config'))->field()->error().
      _tag('p.dm_help', __('The Colorbox extra config settings')).
      _tag('p.dm_help', __('Leave empty to use default colorbox config'))
    )
  )
),

_tag('div#'.$baseTabId.'_advanced',
  _tag('ul.dm_form_elements',
    $form['cssClass']->renderRow()
  )
),

_close('div'); //div.dm_tabbed_form