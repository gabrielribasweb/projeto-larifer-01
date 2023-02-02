<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@id": "<?= $dominio; ?>",
        "name": "<?= $nomeSite ?>",
        "url": "<?= $dominio; ?>"
      }
    }, {
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@id": "<?= $dominio; ?>mapa-site.php",
        "name": "<?= $categoria; ?><?= $sub_categoria; ?>",
        "url": "<?= $dominio; ?>mapa-site.php"
      }
    }, {
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@id": "<?= $urlCanonical; ?>",
        "name": "<?= $h1; ?>",
        "url": "<?= $urlCanonical; ?>"
      }
    }]
  }
</script>
<script type="application/ld+json">
  {
    "@context": "https://www.schema.org",
    "@type": "Corporation",
    "name": "<?= $nomeSite ?>",
    "url": "<?= $dominio; ?>",
    "logo": "<?= $dominio . $imagesSite; ?>logo.webp",
    "image": "<?= $dominio . $imagesSite . $catprod; ?>/h1.webp",
    "telephone": "55 <?= $ddd . $phone; ?>",
    "email": "<?= $emailContatos; ?>",
    "description": "<?= $descricao; ?>",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?= $endereco; ?>",
      "addressLocality": "<?= $cidade; ?>",
      "addressRegion": "SP",
      "postalCode": "<?= $cep; ?>",
      "addressCountry": "BR"
    },
    "sameAs": ["<?= $dominio; ?>"],
    "aggregateRating": {
      "@type": "aggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "122"
    }
  }
</script>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "description": "<?= $descricao; ?>",
    "name": "<?= $nomeSite ?>",
    "image": "<?= $dominio . $imagesSite . $catprod; ?>/h1.webp",
    "telephone": "55 <?= $ddd . $phone; ?>",
    "openingHours": "Mo,Tu,We,Th,Fr 08:00-17:00",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "55 <?= $endereco; ?>",
      "addressLocality": "55 <?= $cidade; ?>",
      "addressRegion": "SP",
      "postalCode": "55 <?= $cep; ?>",
      "addressCountry": "BR"
    },
    "sameAs": ["<?= $dominio; ?>"],
    "geo": {
      "@type": "GeoCoordinates",
      "longitude": "<?= $longitude; ?>",
      "latitude": "<?= $latitude; ?>"
    }
  }
</script>
<script type='application/ld+json'>
  {
    "@context": "https://www.schema.org",
    "@type": "WebSite",
    "name": "<?= $nomeSite ?>",
    "url": "<?= $dominio; ?>",
    "description": "<?= $descricao; ?>",
    "publisher": "www.integracaodigital.com.br"
  }
</script>
<script type='application/ld+json'>
  {
    "@context": "https://www.schema.org",
    "@type": "product",
    "brand": "<?= $nomeSite ?>",
    "logo": "<?= $dominio . $imagesSite; ?>logo.webp",
    "name": "<?= $h1; ?>",
    "category": "Widgets",
    "image": "<?= $dominio . $imagesSite . $catprod; ?>/h1.webp",
    "description": "<?= $descricao; ?>",
    "aggregateRating": {
      "@type": "aggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "122"
    }
  }
</script>
<script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "Recipe",
    "mainEntityOfPage": "<?= $urlCanonical; ?>",
    "name": "<?= $h1; ?>",
    "image": "<?= $dominio . $imagesSite . $catprod; ?>/h1.webp",
    "author": {
      "@type": "Person",
      "name": "<?= $nomeSite ?>"
    },
    "datePublished": "01/11/2020",
    "description": "<?= $descricao; ?>",
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "122"
    },
    "publisher": {
      "@type": "Organization",
      "name": "www.integracaodigital.com.br",
      "logo": "<?= $dominio . $imagesSite; ?>logo.webp"
    }
  }
</script>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "TechArticle",
    "headline": "<?= $h1; ?>",
    "alternativeHeadline": "<?= $h1; ?>- <?= $nomeSite ?>",
    "proficiencyLevel": "Beginner",
    "image": "<?= $dominio . $imagesSite . $catprod; ?>/h1.webp",
    "author": "<?= $nomeSite ?>",
    "genre": "<?= $slogan; ?>",
    "keywords": "<?= $key; ?>",
    "publisher": "www.intgracaodigital.com.br",
    "url": "<?= $urlCanonical; ?>",
    "datePublished": "01/11/2020",
    "description": "<?= $descricao; ?>",
    "articleBody": "<?= $descricao; ?>- <?= $nomeSite ?>"
  }
</script>