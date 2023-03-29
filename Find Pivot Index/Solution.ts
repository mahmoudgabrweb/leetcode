function pivotIndex(nums: number[]): number {
    // First get the sum of the whole array
    let sum: number = nums.reduce((pv, cv) => {
        return pv + cv
    }, 0);

    // Here will be the current sum
    let currentSum: number = 0;

    // Start looping in the array
    for (let i in nums) {
        sum -= nums[i]; // Reduce the sum by the current number so we can compare
        if (currentSum === sum) {
            return +i;
        }
        // Add the current value which is passed already to the left side
        currentSum += nums[i];
    }
    return -1;
}