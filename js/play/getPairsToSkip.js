export async function getPairsToSkip(title){
    const rows = await fetch("responses/play.php?title=" + title);
    return await rows.json();
}