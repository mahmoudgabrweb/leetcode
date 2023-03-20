function canPlaceFlowers(flowerbed: number[], n: number): boolean {
    // First let's add two values in the beginning and in the end to cover our array with zeros
    // As no harm if we do so
    flowerbed.unshift(0);
    flowerbed.push(0);

    // Start the loop from first values till the second end
    for (let i = 1; i < flowerbed.length - 1; i++) {
        let current = flowerbed[i];
        let prev = flowerbed[i - 1];
        let next = flowerbed[i + 1];
        if (current + prev + next == 0) {   // Check if current, next and prev are zero
            n--;    // reduce the count by one
            i++;    // Jump by 2 values
        }
    }
    return n <= 0;
};