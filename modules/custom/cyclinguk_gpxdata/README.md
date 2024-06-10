## Introduction

This module adds the ability for Route editors to use the API provided by https://mapping.cycle.travel/analyse to
populate some form fields automatically from the analysis of uploaded GPX data.

It adds a button labelled "Process GPX for route information" to the Route content type underneath the GPX file field.

## Requirements

Drupal 9, PHP 7.4 or later.

### Content type
The module expects the route **node type** to be `route`, so the add and edit forms have IDs `node_route_form`
and `node_route_edit_form`.

### Fields

The module expects the following **fields** contained in the `route`:

* `field_gpx_file` = A file field containing the GPX data file.
* `field_route_length` = A text field holding the route length in miles.
* `field_hilliness_ref` = A taxonomy reference field, referencing the hilliness term.
* `field-surface-ref` = A taxonomy reference field, referencing the surface term.
* `field-traffic-free` = A boolean field, indicating whether the route is traffic-free or not.

### Taxonomy vocabularies

The two referenced **taxonomy vocabularies** are:

* `hilliness`
* `surface`

These should have a text field `field_code` with values entered for each term to match the codes returned by
the https://mapping.cycle.travel/analyse API. This allows the term names to be anything required for human consumption -
they don't need to match the API returned values.

## Operation method

* Two fields are added to the node edit form: a placeholder for messages, and the "Process" button.
* The "Process" button uses Drupal AJAX functionality to call `cyclinguk_gpxdata_import_ajax_callback()`.
* The callback POSTs the GPX data to the external API.
* The callback processes the returned JSON data and uses AjaxResponse objects to update the form.
  - New HTML tags are added to display the calculated results under each field (`RemoveCommand` and `AppendCommand`)
  - The field is updated to have the returned value from the API (`InvokeCommand` to set field `val` or `prop`).

## Configuration

There are no configuration settings for this module.

## Maintainers

This module was written as a custom one-off module for Cycling UK by Anthony Cartmell ajcartmell@fonant.com
