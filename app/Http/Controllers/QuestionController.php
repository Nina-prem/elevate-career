<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'    => 'required|string|max:255',
            'answer'   => 'required',
            'category' => 'required|string',
        ]);

        Question::create($validatedData);

        return redirect()
            ->route('questions.index')
            ->with('success', 'Question added!');
    }

    // 🟡 EDIT FORM
    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    // 🟡 UPDATE
    public function update(Request $request, Question $question)
    {
        $validatedData = $request->validate([
            'title'    => 'required|string|max:255',
            'answer'   => 'required',
            'category' => 'required|string',
        ]);

        $question->update($validatedData);

        return redirect()
            ->route('questions.index')
            ->with('success', 'Question updated!');
    }

    // 🔴 DELETE
    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()
            ->route('questions.index')
            ->with('success', 'Question deleted!');
    }

    // 🟢 CATEGORY FILTER (fixed)
    public function category($type)
    {
        $questions = Question::where('category', $type)->get();
        return view('questions.category', compact('questions', 'type'));
    }
}
