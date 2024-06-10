# Map Embed
This module is to provide the asset libraries for Richard's mapping javascript and css. 

Current use is through a paragraph type named **Cycling UK Preset Map Embed**. The machine name for this paragraph type is `map_embed_preset`	 

Richard's libraries are only called when needed. This is done by a call from within the twig tempate named

 `paragraph--map-embed-preset.html.twig`

which is the templage for the **Cycling UK Preset Map Embed** paragraph type. In that twig template is this line: 

`{{ attach_library('map_embed/cycling-uk-map') }}`

That pulls in the js and css at the bottom of the page. Drupal is smart enough to know that it should only pull these in once on the page, so if someone uses the **Cycling UK Preset Map Embed** paragraph type multiple times on the page, drupal will still only get those assets the once.

## Challenges so far:
### The uuid and the title from the entity referenced route node
Getting the uuid and the title from the `field_route_embed_id` field has been a challenge. 

The uuid of the route node is needed for the embed script. On the **Route** and **Route D7** content types I have a uuid field. For this I installed the UUID Extra module [project/uuid_extra](https://www.drupal.org/project/uuid_extra). 

On those content types I also created a display mode named **uuid**. The **Route to embed** (`field_route_embed_id`) field on the **Cycling UK Preset Map Embed** paragraph type is set to display as *Rendered entity*, using the **uuid** display mode.

From that **Route to embed** field I have pulled into twig the *title* and *uuid* of the referenced route node, which is all we need. Following too many hours searching for the right combination of parts of the field in twig, I finally found the magic ones to get the title and uuid:

**The title:**

`{{ paragraph.field_route_embed_id.entity.title.value }} `

**The uuid:**

`{{ paragraph.field_route_embed_id.entity.uuid.value }}`

### Having a unique div id for each map embed 
To have the embed generate a unique div id for each embed - which is each time the paragraph type is used - I've installed the Serial module [project/serial](https://www.drupal.org/project/serial). It provides an auto-increment (serial) field. 

Using this I've made the `{{ map_wrapper }}` variable in the `paragraph--map-embed-preset.html.twig` and the other map embed paragraph type twig files. This is a var that is built with the paragraph uuid to create a unique id for the map container div. 

{% set map_wrapper = 'map' ~ content.uuid.0|render|trim %}

## Conditional Fields / Field states UI don't work reliably in paragraphs. The required field states don't seem to work at all.
## Conditional fields NO / Field States UI YES
> The [conditional fields](https://www.drupal.org/project/conditional_fields) module was just too frustrating.
> 
> 06/09/22 I saw mention that the Field States UI did the same.
>
> Installed Field States UI and I have it working on the Cycling UK Preset Map Embed paragraph type.

[Field States UI](https://www.drupal.org/project/field_states_ui)

**06/09/22** 

- Installed field states module
- Changed field for type of embed selection to a List (text) field, as this is what functioned to set conditions with the field states module. (It appears using a term ref field value to set a condition doesn't work, or I've not figured it out, so made this change). The new current fieldname is `field_type_of_embed_preset`
- Modified the form display with two tab groups to try an make it more obvious to the user what to do.

The field states are configured in the field configs on the ***Manage form display*** tab. On this paragraph type that is at `/admin/structure/paragraphs_type/map_embed_preset/form-display`


Another day with drupal.

