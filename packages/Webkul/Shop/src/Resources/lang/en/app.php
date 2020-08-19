<?php

return [
    'security-warning' => 'Actividad sospechosa detectada!!!',
    'nothing-to-delete' => 'Nada que eliminar',

    'layouts' => [
        'my-account' => 'Mi Cuenta',
        'profile' => 'Mis datos',
        'address' => 'Dirección',
        'reviews' => 'Opiniones',
        'wishlist' => 'Favoritos',
        'orders' => 'Pedidos',
        'downloadable-products' => 'Productos descargables'
    ],

    'common' => [
        'error' => 'Algo salió mal, por favor probá más tarde.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Inicio',
        'featured-products' => 'Productos destacados',
        'new-products' => 'Nuevos ingresos',
        'verify-email' => 'Verificá tu cuenta de correo',
        'resend-verify-email' => 'Reenviar correo de verificación'
    ],

    'header' => [
        'title' => 'Cuenta',
        'dropdown-text' => 'Gestioná tu carrito, pedidos y lista de deseos',
        'sign-in' => 'Entrar',
        'sign-up' => 'Registrate',
        'account' => 'Cuenta',
        'cart' => 'Carrito',
        'profile' => 'Mis datos',
        'wishlist' => 'Favoritos',
        'logout' => 'Cerrar sesión',
        'search-text' => 'Buscar productos'
    ],

    'minicart' => [
        'view-cart' => 'Ver carrito',
        'checkout' => 'Hacer pedido',
        'cart' => 'Carrito',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Suscribite al Newsletter',
        'subscribe' => 'Suscribite',
        'locale' => 'Region',
        'currency' => 'Moneda',
    ],

    'subscription' => [
        'unsubscribe' => 'Darse de baja',
        'subscribe' => 'Suscribite',
        'subscribed' => 'Te subscribiste a nuestro newsletter',
        'not-subscribed' => 'No se pudo suscribir al newsletter, por favor intentalo de nuevo más tarde',
        'already' => 'Ya estás suscrito',
        'unsubscribed' => 'Ya no estás suscrito',
        'already-unsub' => 'Ya no estás suscrito',
        'not-subscribed' => '¡Error! El correo no se puede enviar actualmente, intentalo de nuevo más tarde'
    ],

    'search' => [
        'no-results' => 'No hay resultados',
        'page-title' => 'Búsqueda',
        'found-results' => 'Resultados',
        'found-result' => 'Resultado',
        'analysed-keywords' => 'Palabras clave '
    ],

    'reviews' => [
        'title' => 'Título',
        'add-review-page-title' => 'Agregar opinión',
        'write-review' => 'Escribir una opinión',
        'review-title' => 'Título de la opinión',
        'product-review-page-title' => 'Opinión del producto',
        'rating-reviews' => 'Calificación y opiniones',
        'submit' => 'Enviar',
        'delete-all' => 'Todas las opiniones se han eliminado con éxito',
        'ratingreviews' => ':rating calificaciones & :review opiniones',
        'star' => 'Star',
        'percentage' => ':percentage %',
        'id-star' => 'star',
        'name' => 'Nombre'
    ],

    'customer' => [
        'compare'           => [
            'text'                  => 'Compare',
            'compare_similar_items' => 'Compare Similar Items',
            'add-tooltip'           => 'Add product to compare list',
            'added'                 => 'Item successfully added to compare list',
            'already_added'         => 'Item already added to compare list',
            'removed'               => 'Item successfully removed from compare list',
            'empty-text'            => "You don't have any items in your compare list",
            'product_image'         => 'Product Image',
            'actions'               => 'Actions',
        ],

        'signup-text' => [
            'account_exists' => 'Ya tenés una cuenta',
            'title' => 'Entrar'
        ],

        'signup-form' => [
            'page-title' => 'Cliente - Formulario de registro',
            'title' => 'Registrate',
            'firstname' => 'Nombre',
            'lastname' => 'Apellido',
            'email' => 'Email',
            'password' => 'Contraseña',
            'confirm_pass' => 'Confirma la contraseña',
            'button_title' => 'Registro',
            'agree' => 'Esto de acuerdo',
            'terms' => 'Términos',
            'conditions' => 'Condiciónes',
            'using' => 'Mediante el uso de este sitio web',
            'agreement' => 'Acuerdo',
            'success' => 'Cuenta creada exitosamente',
            'success-verify' => 'Cuenta creada con éxito, te enviamos un correo electrónico para su verificación.',
            'success-verify-email-unsent' => 'Cuenta creada correctamente, pero no se pudo enviar el correo electrónico de verificación',
            'failed' => '¡Error! No se puede crear tu cuenta, intentá nuevamente más tarde',
            'already-verified' => 'Tu cuenta ya está verificada. Intentá enviar un nuevo correo electrónico de verificación nuevamente',
            'verification-not-sent' => '¡Error! Problema al enviar el correo electrónico de verificación, intentá nuevamente más tarde',
            'verification-sent' => 'Te enviamos un correo de verificación',
            'verified' => 'Tu cuenta ha sido verificada, intentá iniciar sesión ahora',
            'verify-failed' => 'No podemos verificar tu cuenta de correo',
            'dont-have-account' => 'No tenés cuenta con nosotros',
            'customer-registration' => 'Registrado con éxito'
        ],

        'login-text' => [
            'no_account' => 'No tenés una cuenta',
            'title' => 'Registrate',
        ],

        'login-form' => [
            'page-title' => 'Cliente-Formulario de registro',
            'title' => 'Iniciar sesión',
            'email' => 'Email',
            'password' => 'Contraseña',
            'forgot_pass' => '¿Olvidaste tu contrseña?',
            'button_title' => 'Entrar',
            'remember' => 'Recuérdame',
            'footer' => '© :year - Marketplace desarrollado por Euphorium Software',
            'invalid-creds' => 'Por favor, verificá tus credenciales e intentá de nuevo',
            'verify-first' => 'Verifica tu correo electrónico primero',
            'not-activated' => 'La activación de la cuenta será aprovada por el administrador',
            'resend-verification' => 'Se ha reenviado un correo de verificación'
        ],

        'forgot-password' => [
            'title' => 'Recuperar contraseña',
            'email' => 'Email',
            'submit' => 'Enviar',
            'page_title' => 'Cliente - Formulario de contraseña olvidada'
        ],

        'reset-password' => [
            'title' => 'Restablecer contraseña',
            'email' => 'Email',
            'password' => 'Contraseña',
            'confirm-password' => 'Confirma la contraseña',
            'back-link-title' => 'Reinicia sesión',
            'submit-btn-title' => 'Restablecer contraseña'
        ],

        'account' => [
            'dashboard' => 'Cliente - Editar perfil',
            'menu' => 'Menu',

            'profile' => [
                'index' => [
                    'page-title' => 'Cliente - Perfil',
                    'title' => 'Mis datos',
                    'edit' => 'Editar',
                ],

                'edit-success' => 'Perfil actualizado exitosamente',
                'edit-fail' => '¡Error! El perfil no puede ser actualizado, por favor, intentalo más tarde',
                'unmatch' => 'La anterior contraseña no coincide',

                'fname' => 'Nombre',
                'lname' => 'Apellido',
                'gender' => 'Género',
                'other' => 'Otro',
                'male' => 'Masculino',
                'female' => 'Femenino',
                'dob' => 'Fecha de nacimiento',
                'phone' => 'Celular',
                'email' => 'Email',
                'opassword' => 'Contraseña anterior',
                'password' => 'Contraseña',
                'cpassword' => 'Confirma la contraseña',
                'submit' => 'Perfil actualizado',

                'edit-profile' => [
                    'title' => 'Editar Perfil',
                    'page-title' => 'Cliente - Formulario de edición de perfil'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Cliente - Dirección',
                    'title' => 'Dirección',
                    'add' => 'Agregar dirección',
                    'edit' => 'Editar',
                    'empty' => 'Todavía no ingresaste ninguna dirección',
                    'create' => 'Crear Dirección',
                    'delete' => 'Eliminar',
                    'make-default' => 'Elegir por defecto',
                    'default' => 'Por defecto',
                    'contact' => 'Contacto',
                    'confirm-delete' =>  '¿Querés eleminar esta dirección?',
                    'default-delete' => 'La dirección por defecto no puede ser cambiada',
                    'enter-password' => 'Ingresá tu contraseña',
                ],

                'create' => [
                    'page-title' => 'Cliente - Formulario de dirección',
                    'title' => 'Agregar dirección',
                    'street-address' => 'Calle',
                    'country' => 'País',
                    'state' => 'Provincia',
                    'select-state' => 'Selecciona una región, estado o provincia',
                    'city' => 'Ciudad',
                    'postcode' => 'Código postal',
                    'phone' => 'Teléfono',
                    'submit' => 'Guardar dirección',
                    'success' => 'La dirección agregó correctamente.',
                    'error' => 'La dirección no se puede añadir.'
                ],

                'edit' => [
                    'page-title' => 'Cliente - Editar Dirección',
                    'title' => 'Editar Dirección',
                    'street-address' => 'Calle',
                    'submit' => 'Guardar dirección',
                    'success' => 'Dirección actualizada exitosamente.',
                ],
                'delete' => [
                    'success' => 'Dirección eliminada correctamente',
                    'failure' => 'La dirección no puede ser eliminada',
                    'wrong-password' => 'Contraseña incorrecta'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'Cliente - Pedidos',
                    'title' => 'Pedidos',
                    'order_id' => 'Nº de pedido',
                    'date' => 'Fecha',
                    'status' => 'Estado',
                    'total' => 'Total',
                    'order_number' => 'Número de pedido',
                    'processing' => 'Procesando',
                    'completed' => 'Completado',
                    'canceled' => 'Cancelado',
                    'closed' => 'Cerrado',
                    'pending' => 'Pendiente',
                    'pending-payment' => 'Pago pendiente',
                    'fraud' => 'Falló'
                ],

                'view' => [
                    'page-tile' => 'Pedido #:order_id',
                    'info' => 'Información',
                    'placed-on' => 'Fecha',
                    'products-ordered' => 'Productos pedidos',
                    'invoices' => 'Facturas',
                    'shipments' => 'Envíos',
                    'SKU' => 'SKU',
                    'product-name' => 'Nombre',
                    'qty' => 'Cantidad',
                    'item-status' => 'Estado producto',
                    'item-ordered' => 'Ordenado (:qty_ordered)',
                    'item-invoice' => 'Facturado (:qty_invoiced)',
                    'item-shipped' => 'Enviado (:qty_shipped)',
                    'item-canceled' => 'Cancelado (:qty_canceled)',
                    'price' => 'Precio',
                    'total' => 'Total',
                    'subtotal' => 'Total parcial',
                    'shipping-handling' => 'Envío',
                    'tax' => 'Impuesto',
                    'discount' => 'Descuento',
                    'tax-percent' => 'Porcentaje IVA',
                    'tax-amount' => 'Cantidad impuesto',
                    'discount-amount' => 'Cantidad de dto.',
                    'grand-total' => 'Total',
                    'total-paid' => 'Total 	Pago',
                    'total-refunded' => 'Total Reembolsado',
                    'total-due' => 'Total',
                    'shipping-address' => 'Dirección de envío',
                    'billing-address' => 'Dirección de facturación',
                    'shipping-method' => 'Método de envío',
                    'payment-method' => 'Forma de pago',
                    'individual-invoice' => 'Factura #:invoice_id',
                    'individual-shipment' => 'Envío #:shipment_id',
                    'print' => 'Imprimir',
                    'invoice-id' => 'Nº de factura',
                    'order-id' => 'Nº de Pedido',
                    'order-date' => 'Fecha pedido',
                    'bill-to' => 'Facturar a',
                    'ship-to' => 'Envío a',
                    'contact' => 'Contacto',
                    'tracking-number' => 'Número de tracking',
                    'cancel-confirm-msg' => '¿Estás seguro de que deseas cancelar este pedido?'
                ]
            ],

            'wishlist' => [
                'page-title' => 'Lista de deseos',
                'title' => 'Favoritos',
                'deleteall' => 'Eliminar todo',
                'moveall' => 'Mover todos los productos al carrito',
                'move-to-cart' => 'Mover al carrito',
                'error' => 'No se puede agregar el producto a la lista de deseos por problemas desconocidos, inténtelo más tarde.',
                'add' => 'Artículo agregado a la lista de deseos',
                'remove' => 'Artículo eliminado de la lista de deseos',
                'moved' => 'Producto movido al carrito exitosamente',
                'option-missing' => 'Algunas opciones del producto se perdieron, por eso el producto no se puede mover a Favoritos',
                'move-error' => 'El artículo no se puede añadir a la lista de deseos, por favor inténtalo más tarde',
                'success' => 'Artículo agregado a la lista de deseos',
                'failure' => 'El artículo no se puede añadir a la lista de deseos, por favor inténtalo más tarde',
                'already' => 'Este artículo ya está en tu lista de deseos.',
                'removed' => 'Artículo eliminado de la lista de deseos',
                'remove-fail' => 'El artículo no se puede eliminar de la lista de deseos, por favor inténtalo más tarde',
                'empty' => 'No tiene ningún producto en su lista de deseos',
                'remove-all-success' => 'Todos los artículos de su lista de deseos han sido eliminados'
            ],

            'downloadable_products' => [
                'title' => 'Productos descargables',
                'order-id' => 'Solicitar ID',
                'date' => 'Fecha',
                'name' => 'Título',
                'status' => 'Estado',
                'pending' => 'Pendiente',
                'available' => 'Disponible',
                'expired' => 'Caducado',
                'remaining-downloads' => 'Descargas restantes',
                'unlimited' => 'Ilimitado',
                'download-error' => 'El enlace de descarga ha caducado.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Opiniones',
                    'page-title' => 'Cliente - Opiniones'
                ],

                'view' => [
                    'page-tile' => 'Opinión #:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Filtrar por',
        'price-label' => 'Al precio de',
        'remove-filter-link-title' => 'Limpiar todo',
        'filter-to' => 'a',
        'sort-by' => 'Ordenar por',
        'from-a-z' => 'De A-Z',
        'from-z-a' => 'De Z-A',
        'newest-first' => 'Lo más nuevo primero',
        'oldest-first' => 'Lo más antiguo primero',
        'cheapest-first' => 'Lo más economico primero',
        'expensive-first' => 'Lo más caro primero',
        'show' => 'Show',
        'pager-info' => 'Mostrar :showing of :total Items',
        'description' => 'Descripción',
        'specification' => 'Especificaciones',
        'total-reviews' => ':total Reviews',
        'total-rating' => ':total_rating Ratings & :total_reviews Reviews',
        'by' => 'Por :name',
        'up-sell-title' => 'Quizas te puede interesar...',
        'related-product-title' => 'Productos relacionados',
        'cross-sell-title' => 'Más opciones',
        'reviews-title' => 'Calificación y Opiniones',
        'write-review-btn' => 'Escribe una valoración',
        'choose-option' => 'Seleccioná',
        'sale' => 'On sale',
        'new' => 'Nuevo',
        'empty' => 'No hay prodcutos disponibles en esta categoría',
        'add-to-cart' => 'Agregar al carrito',
        'book-now' => 'reservar ahora',
        'buy-now' => 'Comprar ahora',
        'whoops' => 'Ups!',
        'quantity' => 'Cantidad',
        'in-stock' => 'En stock',
        'out-of-stock' => 'Sin stock',
        'view-all' => 'Ver todo',
        'select-above-options' => 'Primero selecciona las opciones de arriba.',
        'less-quantity' => 'La cantidad no debe ser inferior a uno.',
        'available-for-order' => 'Disponible para ordenar',
        'settings' => 'Opciones',
        'compare_options' => 'Opcion de comparación',
    ],

    // 'reviews' => [
    //     'empty' => 'Aún no has valorado ningún producto'
    // ]

    'buynow' => [
        'no-options' => 'Por favor selecciona las opciones antes de comprar este producto'
    ],


    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' =>'Faltan algunos campos requeridos',
                'missing_options' =>'Faltan opciones configurables del producto',
            ],
            'create-error' => 'Se encontraron algunos problemas con el carrito',
            'title' => 'Mi carrito',
            'empty' => 'Tu carrito está vacío',
            'update-cart' => 'Actualizar carrito',
            'continue-shopping' => 'Seguir comprando',
            'proceed-to-checkout' => 'Continuar con el pago',
            'remove' => 'Eliminar',
            'remove-link' => 'Eliminar',
            'move-to-wishlist' => 'Mover a la lista de deseos',
            'move-to-wishlist-success' => 'Artículo movido a la lista de deseos',
            'move-to-wishlist-error' => 'El artículo no se puede añadir a la lista de deseos, por favor inténtalo más tarde',
            'add-config-warning' => 'Por favor selecciona las opciones antes de añadir al carrito',
            'quantity' => [
                'quantity' => 'Cantidad',
                'success' => 'Carrito actualizado exitosamente',
                'illegal' => 'La cantidad no puede ser menor que uno',
                'inventory_warning' => 'La cantidad solicitada no está disponible, inténtelo más tarde',
                'error' => 'No se pueden actualizar los artículos, inténtelo más tarde'
            ],
            'item' => [
                'error_remove' => 'No hay productos que eliminar en el carrito',
                'success' => 'El producto se añadió al carrito',
                'success-remove' => 'El producto se eliminó del carrito',
                'error-add' => 'El producto no se puede añadir al carrito, inténtelo más tarde',
            ],
            'quantity-error' => 'La cantidad solicitada no está disponible',
            'cart-subtotal' => 'Total parcial',
            'cart-remove-action' => '¿Realmente quieres hacer esto?',
            'partial-cart-update' => 'Solo algunos de los productos se han actualizado',
            'event' => [
                'expired' => 'This event has been expired.'
            ]
        ],

        'onepage' => [
            'title' => 'Revisar',
            'information' => 'Información',
            'shipping' => 'Envío',
            'payment' => 'Pago',
            'complete' => 'Completado',
            'review' => 'revisión',
            'billing-address' => 'Dirección de facturación',
            'sign-in' => 'Entrar',
            'first-name' => 'Nombre',
            'last-name' => 'Apellido',
            'email' => 'Email',
            'address1' => 'Calle',
            'city' => 'Ciudad',
            'state' => 'Provincia',
            'select-state' => 'Selecciona una región, estado o provincia',
            'postcode' => 'Código postal',
            'phone' => 'Teléfono',
            'country' => 'País',
            'enter-coupon-code' => 'Cupón de descuento',
            'order-summary' => 'Detalle de facturación',
            'shipping-address' => 'Dirección de envío',
            'use_for_shipping' => 'Enviar a esta dirección',
            'continue' => 'Continuar',
            'shipping-method' => 'Método de envío',
            'payment-methods' => 'Forma de pago',
            'payment-method' => 'Forma de pago',
            'summary' => 'Detalle de facturación',
            'price' => 'Precio',
            'quantity' => 'Cantidad',
            'billing-address' => 'Dirección de facturación',
            'shipping-address' => 'Dirección de envío',
            'contact' => 'Contacto',
            'place-order' => 'Realizar pedido',
            'new-address' => 'Añadir nueva dirección',
            'save_as_address' => 'Guardar dirección',
            'apply-coupon' => 'Aplicar cupón',
            'amt-payable' => 'Cantidad a pagar',
            'got' => 'Tienes',
            'free' => 'Gratis',
            'coupon-used' => 'Cupón usado',
            'applied' => 'Aplicado',
            'back' => 'Volver',
            'cash-desc' => 'Pago en efectivo',
            'money-desc' => 'Transferencia bancaria',
            'paypal-desc' => 'Paypal',
            'password' => 'Contraseña',
            'free-desc' => 'Envío gratuito',
            'flat-desc' => 'Esta es una tarifa plana',
            'enter-coupon-code' => 'Ingresar cupón'
        ],

        'total' => [
            'order-summary' => 'Detalle de facturación',
            'sub-total' => 'Artículos',
            'grand-total' => 'Total',
            'delivery-charges' => 'Gastos de envío',
            'tax' => 'Impuesto',
            'discount' => 'Descuento',
            'price' => 'Precio',
            'disc-amount' => 'Cantidad de dto.',
            'new-grand-total' => 'Total',
            'coupon' => 'Cupón',
            'coupon-applied' => 'Cupón aplicado',
            'invalid-coupon' => 'Cupón inválido.',
            'remove-coupon' => 'Eliminar cupón',
            'cannot-apply-coupon' => 'No se puede aplicar cupón'
        ],

        'success' => [
            'title' => 'Pedido realizado correctamente',
            'thanks' => '¡Gracias por tu pedido!',
            'order-id-info' => 'Tu número de pedido es #:order_id',
            'info' => 'Te enviaremos un correo electrónico con los detalles de tu pedido y la información de seguimiento'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'Nuevo pedido confirmado',
            'heading' => '¡Pedido Confirmado!',
            'dear' => ' :customer_name',
            'dear-admin' => ' :admin_name',
            'greeting' => 'Gracias por tu compra :order_id solicitada el :created_at',
            'greeting-admin' => 'Número de pedido :order_id, solicitado el :created_at',
            'summary' => 'Detalle de facturación',
            'shipping-address' => 'Dirección de envío',
            'billing-address' => 'Dirección de facturación',
            'contact' => 'Contacto',
            'shipping' => 'Método de envío',
            'payment' => 'Forma de pago',
            'price' => 'Precio',
            'quantity' => 'Cantidad',
            'subtotal' => 'Subtotal',
            'shipping-handling' => 'Envío',
            'tax' => 'Impuesto',
            'discount' => 'Descuento',
            'grand-total' => 'Total',
            'final-summary' => 'Gracias por tu pedido, te enviaremos el número de seguimiento una vez enviado',
            'help' => 'Si necesitas ayuda contacta con nosotros a través de :support_email',
            'thanks' => '¡Gracias!',

            'comment' => [
                'subject' => 'Nuevo comentario agregado a su pedido #:order_id',
                'dear' => ':customer_name',
                'final-summary' => 'Gracias por mostrar su interés en nuestra tienda.',
                'help' => 'Si necesita algún tipo de ayuda, contáctenos en :support_email',
                'thanks' => '¡Gracias!',
            ],

            'cancel' => [
                'subject' => 'Confirmación de pedido cancelado',
                'heading' => 'Pedido cancelado',
                'dear' => ':customer_name',
                'greeting' => 'Tu pedido con el número :order_id predido el :created_at ha sido cancelado',
                'summary' => 'Detalle de facturación',
                'shipping-address' => 'Dirección de envío',
                'billing-address' => 'Dirección de facturación',
                'contact' => 'Contacto',
                'shipping' => 'Método de envío',
                'payment' => 'Forma de pago',
                'subtotal' => 'Subtotal',
                'shipping-handling' => 'Envío',
                'tax' => 'Impuesto',
                'discount' => 'Descuento',
                'grand-total' => 'Total',
                'final-summary' => 'Gracias por tu interés en nuestra tienda',
                'help' => 'Si necesitas ayuda contacta con nosotros a través de :support_email',
                'thanks' => '¡Gracias!',
            ]
        ],
        'invoice' => [
            'heading' => 'Tu factura #:invoice_id del pedido #:order_id',
            'subject' => 'Factura de tu pedido #:order_id',
            'summary' => 'Detalle de facturación',
        ],
        'shipment' => [
            'heading' => 'El Envío #:shipment_id  ha sido generado para el pedido #:order_id',
            'inventory-heading' => 'Nuevo envío #:shipment_id ha sido generado para el pedido #:order_id',
            'subject' => 'Envío de tu pedido #:order_id',
            'inventory-subject' => 'Nuevo envío ha sido generado para el pedido #:order_id',
            'summary' => 'Detalle de facturación',
            'carrier' => 'Transportista',
            'tracking-number' => 'Número de seguimiento',
            'greeting' => 'El pedido :order_id ha sido enviado a :created_at',
        ],
        'forget-password' => [
            'subject' => 'Restablecer contraseña',
            'dear' => ':name',
            'info' => 'Te enviamos este correo porque recibimos una solicitud para restablecer la contraseña de tu cuenta',
            'reset-password' => 'Restablecer contraseña',
            'final-summary' => 'Si no solicitaste cambiar tu contraseña, ignorá este correo.',
            'thanks' => '¡Gracias!'
        ],
        'update-password' => [
            'subject' => 'Contraseña actualizada',
            'dear' => 'Estimado/a :name',
            'info' => 'Está recibiendo este correo electrónico porque ha actualizado su contraseña.',
            'thanks' => '¡Gracias!'
        ],
        'customer' => [
            'new' => [
                'dear' => ':customer_name',
                'username-email' => 'Nombre de usuario/Email',
                'subject' => 'Nuevo registro de cliente',
                'password' => 'Contraseña',
                'summary' => 'Tu cuenta ha sido creada en Bassar.
                Los detalles de tu cuenta puedes verlos abajo: ',
                'thanks' => '¡Gracias!',
            ],

            'registration' => [
                'subject' => 'Nuevo registro de cliente',
                'customer-registration' => 'Cliente registrado exitosamente',
                'dear' => ':customer_name',
                'greeting' => '¡Bienvenido y gracias por registrarte en Reina Batata!',
                'summary' => 'Tu cuenta se creó con éxito, ya podes iniciar sesión con tu email y contraseña.',
                'thanks' => '¡Gracias!',
            ],

            'verification' => [
                'heading' => 'Verificación por correo',
                'subject' => 'Verificación por correo',
                'verify' => 'Verificá tu cuenta',
                'summary' => 'Este mensaje es para verificar que esta dirección de mail es tuya.
                Por favor, seleccioná el botón de abajo para verificar tu cuenta.'
            ],

            'subscription' => [
                'subject' => 'Mail de suscripción',
                'greeting' => ' Bienvenido a Reina Batata - Subscripción por mail',
                'unsubscribe' => 'Darse de baja',
                'summary' => 'Gracias por ponernos en tu bandeja de entrada. Te vamos a mantener al tanto de nuestras promociones y sorteos. Si ya no queŕes recibir
                nuestras últimas noticias, hacé clic en el botón de abajo.'
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '©:year - Marketplace desarrollado por Euphorium Software.',
    ],

    'response' => [
        'create-success' => ':name creado correctamente.',
        'update-success' => ':name actualizado correctamente.',
        'delete-success' => ':name eliminado correctamente.',
        'submit-success' => ':name enviado correctamente.'
    ],
];