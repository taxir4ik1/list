(function($) {
	
	
	"use strict";
	

	$.extend({
		request: function( options ) {
			
			
			options = $.extend({
				
				type: "POST",					// Метод передачи данных серверу
				url: "requests.php",			// Путь к файлу со сценарием обращения к СУБД
				data: null,						// Данные, которые мы будем передавать серверу
				async: false,					// Асинхронность выполнения AJAX-запроса
				dataType: "json",				// Тип данных, в котором они передаются
				before: null,					// Код, выполняемый перед AJAX-запросом
				error: function() {},			// Код, выполняемый в случае какой-либо ошибки при AJAX-запросе
				complete: options.callback,		// Код, выполняемый после AJAX-запроса	
				success: function( result ) {	// Код, выполняемый после получения ответа от сервера
					$.response.result = result;	// Помещаем ответ от сервера в отдельный объект
				},
				result: null,					// Результат работы
				callback: null					// Функция обратного вызова
				
			}, options );
			
			options.before = function() {
				alert( "ok before" );
			};
			
			// Тело AJAX-запроса
			$.ajax({
				
				type: options.type,
				url: options.url,
				data: options.data,
				async: options.async,
				dataType: options.dataType,
				before: options.before,
				error: options.error,
				complete: options.complete,
				success: options.success
				
			});
			
			return this;
			
		},
	
		response: {
			result: {}
		}
	});
	
	jQuery(function() {
		
	
		 
		
		$( '#producer' ).change(function() {
			
			var producer_id = $( this ).val();	
			
			
			
			
			$( '#model' ).prop( 'disabled', true )
			
			
			.find( 'option:not( :first )' ).remove();
			
			
			
			
			if ( producer_id != 0 ) {
				
				
				$.request({
					
					data: "request=getModels&producer_id=" + producer_id,
					
				});
				
				var i = 0, models = $.response.result;
				for ( i; i < models.length; i++ ) {
					
					$( '#model' ).append( '<option value="' + models[ i ].id + '">' + models[ i ].model + '</option>' );
					
				}
				
			
				$( '#model' ).prop( 'disabled', false );
				
			}
			
		}); 
	
	});
	
})(jQuery);