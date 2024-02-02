<article>
    <script src="../../js/add.js" defer></script>

    <div id="titleAndVideoIdInstructions">
        The title is what you will use to retrieve the video you want.
    </div>

    <form>
        <div id="titleAndVideoId">
            <input type="text" name="title" placeholder="title" />
            <input type="text" name="videoId" placeholder="video ID" />
        </div>
        
        <div>
            <div id="secondsInstructions1">
                The start and end second inputs are for a part you want skipped.
            </div>
            <div id="secondsInstructions2">
                Each set of start and end inputs will correspond to a part that will be skipped.
            /div>
        </div>

        <div id="groupOfSecondsInputs">
            <div class="secondsInput">
                <input type="number" name="start1" min="0" placeholder="start second" class="startInput" />
                <input type="number" name="end1" min="0" placeholder="end second" class="endInput" />
            </div>    
        </div>
    </form>

    <div id="addPartDiv">
        <button id="addPart">Add part</button>
    </div>
    <div id="submitButtonDiv">
        <button id="submit">Submit</button>
    </div>

</article>