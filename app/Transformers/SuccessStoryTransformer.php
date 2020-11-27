<?php

namespace App\Transformers;

use App\SuccessStory;
use League\Fractal\TransformerAbstract;

class SuccessStoryTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(SuccessStory $successStory)
    {
        return [
            'slug_es' => (string) $successStory->{'slug:es'},
            'slug_pt' => (string) $successStory->{'slug:pt'},
            'title_es' => (string) $successStory->{'title:es'},
            'title_pt' => (string) $successStory->{'title:pt'},
            'is_highlight_list_es' => (string) $successStory->{'is_highlight_list:es'} ? 'SI' : 'NO',
            'is_highlight_list_pt' => (string) $successStory->{'is_highlight_list:pt'} ? 'SI' : 'NO',
            'is_highlight_home_es' => (string) $successStory->{'is_highlight_home:es'} ? 'SI' : 'NO',
            'is_highlight_home_pt' => (string) $successStory->{'is_highlight_home:pt'} ? 'SI' : 'NO',
            'is_active_es' => (string) $successStory->{'is_active:es'} ? 'SI' : 'NO',
            'is_active_pt' => (string) $successStory->{'is_active:pt'} ? 'SI' : 'NO',
            'actions' => [
                'edit' => (string) route('success-stories.edit', $successStory),
                'delete' => (string) route('success-stories.destroy', $successStory)
            ]
        ];
    }
}
