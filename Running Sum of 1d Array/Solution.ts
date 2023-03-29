function runningSum(nums: number[]): number[] {
    let sum: number = 0;
    let result: number[] = [];
    for (let number of nums) {
        sum += number;
        result.push(sum);
    }
    return result;
};