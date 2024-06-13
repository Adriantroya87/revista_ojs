<?php return array (
  'plugins.pubIds.urn.displayName' => 'URN',
  'plugins.pubIds.urn.description' => 'Este módulo activa la asignación de URN (Uniform Resource Names) de los números, artículos y galeradas en OJS.',
  'plugins.pubIds.urn.manager.settings.description' => 'Configure el módulo URN para poder administrar y usar URN en OJS:',
  'plugins.pubIds.urn.manager.settings.urnObjects' => 'Contenido de la revista',
  'plugins.pubIds.urn.manager.settings.urnObjectsRequired' => 'Escoja los objetos a los que asignar URNs.',
  'plugins.pubIds.urn.manager.settings.explainURNs' => 'Escoja los objetos publicados a los que asignar URN (Uniform Resource Name):',
  'plugins.pubIds.urn.manager.settings.enableIssueURN' => 'Números',
  'plugins.pubIds.urn.manager.settings.enablePublicationURN' => 'Artículos',
  'plugins.pubIds.urn.manager.settings.enableRepresentationURN' => 'Galeradas',
  'plugins.pubIds.urn.manager.settings.urnPrefix' => 'Prefijo URN',
  'plugins.pubIds.urn.manager.settings.urnPrefix.description' => 'El prefijo URN es la parte no cambiante del URN (p.ej. "urn:nbn:de:0000-").',
  'plugins.pubIds.urn.manager.settings.form.urnPrefixPattern' => 'El patrón del prefijo URN debe seguir el formato "urn:"&lt;NID&gt;":"&lt;NSS&gt;.',
  'plugins.pubIds.urn.manager.settings.urnSuffix' => 'Sufijo URN',
  'plugins.pubIds.urn.manager.settings.urnSuffix.description' => 'El sufijo URN pude tomar cualquier forma, pero debe ser único entre todos los objetos publicados bajo un mismo prefijo URN:',
  'plugins.pubIds.urn.manager.settings.urnSuffixPattern' => 'Indique el patrón que desea emplear para generar sufijos URN. Utilice %j para las iniciales de la revista, %v para el número de volúmen, %i para el número de número, %Y para el año, %a para el ID de artículo, %g para el ID de galerada, %f para el ID de fichero, %p para el número de página y %x para el "Identificador personalizado".',
  'plugins.pubIds.urn.manager.settings.urnSuffixPattern.example' => 'Por ejemplo, vol%viss%ipp%p crearía el sufijo URN "vol3iss2pp230".',
  'plugins.pubIds.urn.manager.settings.urnSuffixPattern.issues' => 'para números',
  'plugins.pubIds.urn.manager.settings.urnSuffixPattern.submissions' => 'para artículos',
  'plugins.pubIds.urn.manager.settings.urnSuffixPattern.representations' => 'para galeradas',
  'plugins.pubIds.urn.manager.settings.urnIssueSuffixPatternRequired' => 'Introduzca el patrón de sufijo URN para los números.',
  'plugins.pubIds.urn.manager.settings.urnPublicationSuffixPatternRequired' => 'Introduzca el patrón de sufijo URN para artículos.',
  'plugins.pubIds.urn.manager.settings.urnRepresentationSuffixPatternRequired' => 'Introduzca el patrón de sufijo URN para las galeradas.',
  'plugins.pubIds.urn.manager.settings.urnSuffixDefault' => 'Usar los patrones por defecto.',
  'plugins.pubIds.urn.manager.settings.urnSuffixDefault.description' => '%j.v%vi%i para números<br />%j.v%vi%i.%a para artículos<br />%j.v%vi%i.%a.g%g para galeradas.',
  'plugins.pubIds.urn.manager.settings.urnSuffixCustomIdentifier' => 'Introduzca un sufijo URN individual para cada item publicado. Encontrará un campo adicional para el URN en la página de metadatos de cada ítem.',
  'plugins.pubIds.urn.manager.settings.checkNo' => 'Número de comprobación',
  'plugins.pubIds.urn.manager.settings.checkNo.label' => 'El número de comprobación (check number) se calculará automáticamente y se añadirá al final como último dígito del URN.',
  'plugins.pubIds.urn.manager.settings.namespace' => 'Espacio de nombres (namespace)',
  'plugins.pubIds.urn.manager.settings.namespace.choose' => 'Escoger',
  'plugins.pubIds.urn.manager.settings.namespace.description' => 'El identificador persistente del espacio de nombres (namespace) requerido a menudo para el registro (p.ej. en la Deutsche Nationalbibliothek).',
  'plugins.pubIds.urn.manager.settings.urnResolver' => 'URL de resolución',
  'plugins.pubIds.urn.manager.settings.urnResolver.description' => '(p.ej. http://nbn-resolving.de/)',
  'plugins.pubIds.urn.manager.settings.form.urnResolverRequired' => 'Introduzca la URL de resolución.',
  'plugins.pubIds.urn.manager.settings.urnReassign' => 'Reasignar URNs',
  'plugins.pubIds.urn.manager.settings.urnReassign.description' => 'Si cambia su configuración URN, los URNs ya asignados no se verán afectadas. Cuando guarde la configuración URN, podrá usar este botón para limpiar los URNs existentes, de forma que la nueva configuración tenga efecto para todos los objetos existentes.',
  'plugins.pubIds.urn.manager.settings.urnReassign.confirm' => '¿Seguro que quiere eliminar todos los URN existentes?',
  'plugins.pubIds.urn.editor.urn' => 'URN',
  'plugins.pubIds.urn.editor.urnObjectTypeIssue' => 'número',
  'plugins.pubIds.urn.editor.urnObjectTypeSubmission' => 'artículo',
  'plugins.pubIds.urn.editor.urnObjectTypeRepresentation' => 'galerada',
  'plugins.pubIds.urn.editor.customSuffixMissing' => 'No se puede asignar un URN porque falta el sufijo personalizado.',
  'plugins.pubIds.urn.editor.patternNotResolved' => 'No se puede asignar un URN porque contiene patrones sin resolver.',
  'plugins.pubIds.urn.editor.canBeAssigned' => 'Lo que se muestra es una vista previa del URN. Seleccione la casilla de verificación y guarde el formulario para asignar el URN.',
  'plugins.pubIds.urn.editor.assigned' => 'El URN asignado a este {$pubObjectType}.',
  'plugins.pubIds.urn.editor.urnSuffixCustomIdentifierNotUnique' => 'El sufijo URN dado ya está en uso para otro elemento publicado. Ingrese un sufijo URN único para cada elemento.',
  'plugins.pubIds.urn.editor.clearObjectsURN' => 'Limpiar',
  'plugins.pubIds.urn.editor.clearObjectsURN.confirm' => '¿Seguro que quiere borrar el URN existente?',
  'plugins.pubIds.urn.editor.clearIssueObjectsURN' => 'Limpiar los URN de los objetos del número',
  'plugins.pubIds.urn.editor.clearIssueObjectsURN.confirm' => '¿Seguro que quiere eliminar los URN de los objetos del número existentes?',
  'plugins.pubIds.urn.editor.clearIssueObjectsURN.description' => 'Use la siguiente opción para limpiar los URNs de todos los objetos (artículos y galerias) actualmente programados para este número.',
  'plugins.pubIds.urn.editor.addCheckNo' => 'Añadir número de comprobación',
  'plugins.pubIds.urn.editor.assignURN' => 'Asignar el URN {$pubId} a este {$pubObjectType}',
  'plugins.pubIds.urn.editor.assignURN.emptySuffix' => 'El URN no se puede asignar porque falta el sufijo personalizado.',
  'plugins.pubIds.urn.editor.assignURN.pattern' => 'El URN {$pubId} no se puede asignar porque contiene patrones sin resolver.',
  'plugins.pubIds.urn.editor.assignURN.assigned' => 'Se ha asignado el URN {$pubId}.',
  'plugins.pubIds.urn.form.checkNoRequired' => 'Falta el número de comprobación.',
  'plugins.pubIds.urn.editor.urn.description' => 'El URN debe empezar con {$prefix}.',
  'plugins.pubIds.urn.editor.urn.assignUrn' => 'Asignar',
  'plugins.pubIds.urn.editor.missingIssue' => 'No puede generar un URN hasta que esta publicación haya sido asignada a un número.',
  'plugins.pubIds.urn.editor.missingParts' => 'No puede generar un URN porque una o más partes del patrón URN no se encuentran. Sería necesario asignar la publicación a un número, establecer un identificador editorial o añadir los números de página.',
  'plugins.pubIds.urn.editor.missingPrefix' => 'El URN debe empezar con {$urnPrefix}.',
  'plugins.pubIds.urn.editor.preview.publication' => 'El URN de esta publicación será {$urn}.',
  'plugins.pubIds.urn.editor.preview.publication.none' => 'No se ha asignado ningún URN a esta publicación.',
  'plugins.pubIds.urn.editor.preview.galleys' => 'Galerada: {$galleyLabel}',
  'plugins.pubIds.urn.editor.preview.objects' => 'Ítem',
  'plugins.pubIds.urn.manager.settings.enableSubmissionURN' => 'Artículos',
  '
' => 'Introduzca el patrón de sufijo URN para los artículos.',
);