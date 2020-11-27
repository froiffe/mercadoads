<?php

namespace App\Transformers;

use App\Insight;
use League\Fractal\TransformerAbstract;

class InsightTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Insight $insight)
    {
        return [
            'slug_es' => (string) $insight->{'slug:es'},
            'slug_pt' => (string) $insight->{'slug:pt'},
            'title_es' => (string) $insight->{'title:es'},
            'title_pt' => (string) $insight->{'title:pt'},
            'is_highlight_list_es' => (string) $insight->{'is_highlight_list:es'} ? 'SI' : 'NO',
            'is_highlight_list_pt' => (string) $insight->{'is_highlight_list:pt'} ? 'SI' : 'NO',
            'is_highlight_home_es' => (string) $insight->{'is_highlight_home:es'} ? 'SI' : 'NO',
            'is_highlight_home_pt' => (string) $insight->{'is_highlight_home:pt'} ? 'SI' : 'NO',
            'is_active_es' => (string) $insight->{'is_active:es'} ? 'SI' : 'NO',
            'is_active_pt' => (string) $insight->{'is_active:pt'} ? 'SI' : 'NO',
            'actions' => [
                'edit' => (string) route('insights.edit', $insight),
                'delete' => (string) route('insights.destroy', $insight)
            ]
        ];
    }
}
