function decode(encoded: number[], first: number): number[] {
    let result: number[] = [first]; // push the first element in the array
    for (let i: number = 0; i < encoded.length; i++) {
        // get the value before the XOR
        result.push(encoded[i] ^ result[i]);
    }
    return result;
};