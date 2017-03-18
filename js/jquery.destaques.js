/**
 * Escopo de compatibilidade do jQuery
 */
(function($){
	
	$(document).ready(function() {

		// Cria uma div.paginas que receberá os paginadores
		var div = $('<div></div>').addClass('paginas');
		// Insere a div criada antes da lista de destaques
		$('#blocoDestaques ul').before(div);
		
		/**
		 * Roda o jQuery Cycle na lista (ul) que está
		 * dentro do bloco de destaques (#blocoDestaques) 
		 */
		$('#blocoDestaques ul').cycle({
			pager: 'div.paginas', // Paginadores
			pause: true, // Pausa ao passar o mouse sobre ele?
			pauseOnPagerHover: true, // Pausa ao passar o mouse sobre as páginas?
			
			// Executa uma função antes de cada troca de slide
			before: function(atual, proximo, opcoes, avancando) {
				/**
				 * Esconde o parágrafo E a div.fundo que estão dentro do slide atual
				 */
				$('p, div.fundo', atual).slideUp('fast');
			},
			
			// Executa uma função depois de cada troca de slide
			after: function(atual, proximo, opcoes, avancando) {
				/**
				 * Altera dois atributos da etiqueta [Destaques] para
				 * ela ter o mesmo titulo e link do destaque mostrado
				 */
				$('a.faixa', '#blocoDestaques').attr({
					title: $('a', proximo).attr('title'),
					href: $('a', proximo).attr('href')
				});
				
				/**
				 * Mostra o parágrafo E a div.fundo que estão dentro do slide atual
				 */
				$('p, div.fundo', proximo).slideDown('fast');
			}
		});
		
	});
	
})(jQuery);