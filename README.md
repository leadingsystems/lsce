# Leading Systems LSCE

## What is LSCE?
LSCE is a collection of content elements (custom elements) for Contao. LSCE relies on the
custom elements extension by rocksolid to render the elements' backend interface and frontend
output. The elements are styled using the LSCSS framework which essentially means SASS in the
SCSS syntax. If elements require JavaScript, the scripts provided with the elements rely on
the LSJS framework.

**ATTENTION: Using JavaScript in LSCE is not yet supported because LSJS does not yet support
loading external modules.**

## Getting started
After installing LSCE, it is located in assets/lsce.

***Please note:** The files in this directory must not be modified.*

In order to be able to use a content element from the LSCE collection, you must copy both
files contained in the element's copy folder to "/templates". This is necessary because
the rocksolid custom elements extension expects both the config file and the template of
each custom element to be located in that folder. The files to copy contain include statements
which load the actual config and template files from "assets/lsce".

Since every LSCE content element comes with its own stylesheet, you also have to import
the stylesheet of each content element that you want to use in your project's lscss-project.scss
file.

After that, using LSCE content elements simply means using them in the Contao backend as
content elements and/or frontend modules just like you would use any regular content element
or frontend module.

## Modifying LSCE content elements
If you want to modify a content element, you can simply open the element's config and/or
template files in the "/templates" folder and replace the include statement with the content
of the included file. The LSCSS stylesheet that you import in your lscss-project.scss can be
copied from the LSCE content element's folder (from "assets/lsce") to your project's LSCSS
folder and then you can include the copied filed. You can now change the code in those files
as you wish and all changes are update-safe.