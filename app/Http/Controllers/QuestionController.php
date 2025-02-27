<?php

namespace App\Http\Controllers;

use App\Model\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\QuestionResource;
class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('JWT',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  QuestionResource::collection(Question::latest()->get());
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Question::create($request->all());
        return response('Created',Response::HTTP_CREATED);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Question  $questions
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return new QuestionResource($question);
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
       $question->update($request->all());
       return response('Updated',Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return response('Deleted',204); 
    }
}
