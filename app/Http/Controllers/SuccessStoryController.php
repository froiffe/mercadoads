<?php

namespace App\Http\Controllers;

use App\Page;
use App\SuccessStory;
use Illuminate\Http\Request;

class SuccessStoryController extends Controller
{
    public function index()
    {
        $highlightSuccessStory = SuccessStory::join('success_story_translations', 'success_stories.id', '=', 'success_story_translations.success_story_id')
            ->where('success_story_translations.is_active', 1)
            ->where('success_story_translations.is_highlight_list', 1)
            ->where('locale', app()->getLocale())
            ->select('success_stories.*')
            ->first();

        $successStories = SuccessStory::join('success_story_translations', 'success_stories.id', '=', 'success_story_translations.success_story_id')
            ->where('success_story_translations.is_active', 1)
            ->where('success_story_translations.is_highlight_list', 0)
            ->where('locale', app()->getLocale())
            ->select('success_stories.*')
            ->get();

        return view('success-stories.index')
            ->with('highlightSuccessStory', $highlightSuccessStory)
            ->with('successStories', $successStories)
            ->with('page', Page::where('name', 'Casos de éxito')->first());
    }

    public function details(Request $request, $slug)
    {
        $successStory = SuccessStory::join('success_story_translations', 'success_stories.id', '=', 'success_story_translations.success_story_id')
            ->where('success_story_translations.is_active', 1)
            ->where('success_story_translations.slug', $slug)
            ->select('success_stories.*')
            ->first();

        if( is_null($successStory) ) {
            abort(404);
        }

        return view('success-stories.details')
            ->with('successStory', $successStory);
    }
}
