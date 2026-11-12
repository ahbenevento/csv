<?php

namespace AHB\CSV\Import\Protocol;

use AHB\CSV\Import\Protocol\Exception\CsvFileNotFoundException;

/**
 * Interface of Lexer
 */
interface LexerInterface
{
    /**
     * Parse csv file
     * @param string $filename
     * @param InterpreterInterface $interpreter
     * @return boolean
     * @throws CsvFileNotFoundException
     */
    public function parse($filename, InterpreterInterface $interpreter);
}
